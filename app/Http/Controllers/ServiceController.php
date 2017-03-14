<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class ServiceController extends Controller
{
  public function __construct()
      {
          $this->middleware('auth');
          $this->middleware('services_read')->only(['index' , 'show' ]);
          $this->middleware('services_create')->only(['create' , 'store' ]);
          $this->middleware('services_edit')->only(['edit' , 'update' ]);
          $this->middleware('services_delete')->only('destroy');


      }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // get all the services
      $services = Service::all();
      // load the view and pass the services
      return View::make('services.index')->with('services', $services);
      }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // load the create form (app/views/services/create.blade.php)
        return View::make('services.create');
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
      // read more on validation at http://laravel.com/docs/validation
      $rules = array(
          'name'       => 'required',

      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('services/create')
              ->withErrors($validator)
              ->withInput(Input::except('password'));
      } else {
          // store
          $service = new Service;
          $service->name       = Input::get('name');
          $service->save();

          // redirect
          Session::flash('message', 'Stworzono serwis!');
          return Redirect::to('services');
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
      // get the service
      $service = Service::find($id);

      // show the view and pass the service to it
      return View::make('services.show')
          ->with('service', $service);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // get the service
        $service = Service::find($id);

        // show the edit form and pass the service
        return View::make('services.edit')
            ->with('service', $service);
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
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',

        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('services/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $service = Service::find($id);
            $service->name       = Input::get('name');

            $service->save();

            // redirect
            Session::flash('message', 'Zaktualizowano dane serwisu!');
            return Redirect::to('services');
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
      $service = Service::find($id);
      $service->delete();

      // redirect
      Session::flash('message', 'Usunieto serwis!');
      return Redirect::to('services');
    }
}
