<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\User;
use App\Part;
use App\Vehicle;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{

  public function __construct()
      {
          $this->middleware('auth');
          $this->middleware('vehicles_read')->only(['index' , 'show' ]);
          $this->middleware('vehicles_create')->only(['create' , 'store' ]);
          $this->middleware('vehicles_edit')->only(['edit' , 'update' ]);
          $this->middleware('vehicles_delete')->only('destroy');
      }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // get all the vehicles
      $vehicles = Vehicle::where('service_id', Auth::user()->service_id)->get();

      // load the view and pass the vehicles
      return View::make('vehicles.index')
          ->with('vehicles', $vehicles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $services = Service::pluck('name', 'id');
         return View::make('vehicles.create')->with('services', $services);
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
            'name'       => 'required',
            'type' => 'required',
            'production_date' => 'required',
            'warranty' => 'required',


        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('vehicles/create')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            // store
            $vehicle = new Vehicle;
            $vehicle->name       = Input::get('name');
            $vehicle->service_id = Auth::user()->service_id;
            $vehicle->type      = Input::get('type');
            $vehicle->production_date = Input::get('production_date');
            $vehicle->warranty      = Input::get('warranty');
            $vehicle->save();

            // redirect
            Session::flash('message', 'Dodano pozycję do bazy danych!');
            return Redirect::to('vehicles');
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
      // get the vehicle
      $vehicle = Vehicle::find($id);

      // show the view and pass the vehicle to it
      return View::make('vehicles.show')
          ->with('vehicle', $vehicle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // get the vehicle
      $vehicle = Vehicle::find($id);
      $services = Service::pluck('name', 'id');

      // show the edit form and pass the vehicle
      return View::make('vehicles.edit', compact('vehicle', 'services'));
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
        'name'       => 'required',
        'type' => 'required',
        'production_date' => 'required',
        'warranty' => 'required',

      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('vehicles/' . $id . '/edit')
              ->withErrors($validator)
              ->withInput(Input::all());
      } else {
          // store
          $vehicle = Vehicle::find($id);
          $vehicle->name       = Input::get('name');
          $vehicle->type      = Input::get('type');
          $vehicle->production_date = Input::get('production_date');
          $vehicle->warranty      = Input::get('warranty');
          $vehicle->save();

          // redirect
          Session::flash('message', 'Zapisano zmiany!');
          return Redirect::to('vehicles');
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
      $vehicle = Vehicle::find($id);
      $vehicle->delete();

      // redirect
      Session::flash('message', 'Usunięto pozycję!');
      return Redirect::to('vehicles');
    }
}
