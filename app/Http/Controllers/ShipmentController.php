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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $shipments = Shipment::orderBy('date', 'desc')->get();
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
            $shipment->date          = Input::get('date');
            $shipment->status        = Input::get('status');
            $shipment->serial        = Input::get('serial');
            $shipment->quantity      = Input::get('quantity');
            $shipment->info          = Input::get('info');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
