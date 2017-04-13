<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Car;
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

class CarController extends Controller
{

  public function __construct()
      {
          $this->middleware('auth');
          $this->middleware('cars_read')->only(['index' , 'show' ]);
          $this->middleware('cars_create')->only(['create' , 'store' ]);
          $this->middleware('cars_edit')->only(['edit' , 'update' ]);
          $this->middleware('cars_delete')->only('destroy');
      }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cars = Car::all()->where('service_id', Auth::user()->service_id);
      $services = Service::all();
      $users = User::all();

      return View::make('cars.index', compact('cars', 'services', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $services = Service::pluck('name', 'id')->toArray();
      $users = User::where('service_id', Auth::user()->service_id)->pluck('name', 'id')->toArray();

         return View::make('cars.create', compact('services','users'));
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
            'user_id' => 'required|numeric',
            'production_date' => 'required|date',
            'insurance_date' => 'required|date',
            'card_date' => 'required|date',
            'service_date' => 'required|date',
            'distance' => 'required|numeric',
            'engine' => 'required',
            'reg_nr' => 'required',



        );

        $validator = Validator::make(Input::all(), $rules);


        // process the login
        if ($validator->fails()) {
            return Redirect::to('cars/create')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            // store
            $car = new Car;
            $car->name             = Input::get('name');
            $car->service_id       = Auth::user()->service_id;
            $car->user_id          = Input::get('user_id');
            $car->production_date  = Input::get('production_date');
            $car->insurance_date   = Input::get('insurance_date');
            $car->card_date        = Input::get('card_date');
            $car->service_date     = Input::get('service_date');
            $car->distance         = Input::get('distance');
            $car->engine           = Input::get('engine');
            $car->reg_nr           = Input::get('reg_nr');
            $car->save();

            // redirect
            Session::flash('message', 'Dodano pozycję do bazy danych!');
            return Redirect::to('cars');
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



      $car = Car::find($id);

      // show the view and pass the vehicle to it
      return View::make('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $users = User::pluck('name', 'id')->toArray();
      $services = Service::pluck('name', 'id')->toArray();
      $car = Car::find($id);

      return View::make('cars.edit', compact('users', 'car', 'services'));
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
        'user_id' => 'required|numeric',
        'production_date' => 'required|date',
        'insurance_date' => 'required|date',
        'card_date' => 'required|date',
        'service_date' => 'required|date',
        'distance' => 'required|numeric',
        'engine' => 'required',
        'reg_nr' => 'required',

      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('cars/' . $id . '/edit')
              ->withErrors($validator)
              ->withInput(Input::all());
      } else {
          // store
          $car = Car::find($id);
          $car->name             = Input::get('name');
          $car->user_id          = Input::get('user_id');
          $car->production_date  = Input::get('production_date');
          $car->insurance_date   = Input::get('insurance_date');
          $car->card_date        = Input::get('card_date');
          $car->service_date     = Input::get('service_date');
          $car->distance         = Input::get('distance');
          $car->engine           = Input::get('engine');
          $car->reg_nr           = Input::get('reg_nr');
          $car->save();

          // redirect
          Session::flash('message', 'Zapisano zmiany!');
          return Redirect::to('cars');
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
      $car = Car::find($id);
      $car->delete();

      // redirect
      Session::flash('message', 'Usunięto pozycję!');
      return Redirect::to('cars');
    }
}
