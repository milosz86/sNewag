<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\User;
use App\Part;
use App\Vehicle;
use App\Shipment;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ShipmentController extends Controller
{


  public function __construct()
      {
          $this->middleware('auth');
          $this->middleware('shipments_read')->only(['index' , 'show' ]);
          $this->middleware('shipments_create')->only(['create' , 'store' ]);
          $this->middleware('shipments_edit')->only(['edit' , 'update' ]);
          $this->middleware('shipments_delete')->only('destroy');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $shipments = Shipment::orderBy('date', 'desc')->where('service_id', Auth::user()->service_id)->get();
      $parts = Part::all();
      $users = User::all();

      return View::make('shipments.index', compact('shipments', 'parts', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $parts = Part::pluck('name', 'id')->toArray();

         return View::make('shipments.create', compact('parts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate
        $rules = array(
            'part_id'       => 'required|numeric',
            'date' => 'required',
            'status' => 'required',
            'quantity' => 'required|numeric',



        );

        $validator = Validator::make(Input::all(), $rules);


        // process the login
        if ($validator->fails()) {
            return Redirect::to('shipments/create')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            // store
            $shipment = new Shipment;
            $shipment->part_id       = Input::get('part_id');
            $shipment->user_id       = Auth::id();
            $shipment->service_id    = Auth::user()->service_id;
            $shipment->date          = Input::get('date');
            $shipment->status        = Input::get('status');
            $shipment->serial        = Input::get('serial');
            $shipment->quantity      = Input::get('quantity');
            $shipment->info          = Input::get('info');
            $shipment->edited_by     = Auth::id();
            $shipment->save();

            // redirect
            Session::flash('message', 'Dodano pozycję do bazy danych!');
            return Redirect::to('shipments');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $parts = Part::all();
      $users = User::all();

      $shipment = Shipment::where('service_id', Auth::user()->service_id)->find($id);

      // show the view and pass the vehicle to it
      return View::make('shipments.show', compact('shipment', 'parts', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $parts = Part::pluck('name', 'id')->toArray();
      $shipment = Shipment::where('service_id', Auth::user()->service_id)->find($id);

      return View::make('shipments.edit', compact('parts', 'shipment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // validate
      $rules = array(
        'part_id'       => 'required|numeric',
        'date' => 'required',
        'status' => 'required',
        'quantity' => 'required|numeric',

      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('shipments/' . $id . '/edit')
              ->withErrors($validator)
              ->withInput(Input::all());
      } else {
          // store
          $shipment = Shipment::where('service_id', Auth::user()->service_id)->find($id);
          $shipment->part_id       = Input::get('part_id');
          $shipment->date          = Input::get('date');
          $shipment->status        = Input::get('status');
          $shipment->serial        = Input::get('serial');
          $shipment->quantity      = Input::get('quantity');
          $shipment->info          = Input::get('info');
          $shipment->edited_by     = Auth::id();
          $shipment->save();

          // redirect
          Session::flash('message', 'Zapisano zmiany!');
          return Redirect::to('shipments');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // delete
      $shipment = Shipment::where('service_id', Auth::user()->service_id)->find($id);
      $shipment->delete();

      // redirect
      Session::flash('message', 'Usunięto pozycję!');
      return Redirect::to('shipments');
    }
}
