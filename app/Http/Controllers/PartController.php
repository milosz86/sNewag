<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\User;
use App\Part;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
class PartController extends Controller
{


  public function __construct()
      {
          $this->middleware('auth');
          $this->middleware('parts_read')->only(['index' , 'show' ]);
          $this->middleware('parts_create')->only(['create' , 'store' ]);
          $this->middleware('parts_edit')->only(['edit' , 'update' ]);
          $this->middleware('parts_delete')->only('destroy');



      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // get all the parts
      $parts = Part::all();

      // load the view and pass the parts
      return View::make('parts.index')
          ->with('parts', $parts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // load the create form (app/views/parts/create.blade.php)
      return View::make('parts.create');
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
            'number' => 'required',


        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('parts/create')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            // store
            $part = new Part;
            $part->user_id       = Auth::id();
            $part->name       = Input::get('name');
            $part->number      = Input::get('number');
            $part->createdby = Input::get('createdby');
            $part->save();

            // redirect
            Session::flash('message', 'Dodano pozycję do bazy danych!');
            return Redirect::to('parts');
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
      // get the part
      $part = Part::find($id);
      $user = User::all();

      // show the view and pass the part to it
      return View::make('parts.show', compact('part', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // get the part
      $part = Part::find($id);

      // show the edit form and pass the part
      return View::make('parts.edit')
          ->with('part', $part);
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
        'number' => 'required',

      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('parts/' . $id . '/edit')
              ->withErrors($validator)
              ->withInput(Input::all());
      } else {
          // store
          $part = Part::find($id);
          $part->name       = Input::get('name');
          $part->number      = Input::get('number');
          $part->createdby = Input::get('createdby');
          $part->save();

          // redirect
          Session::flash('message', 'Zapisano zmiany!');
          return Redirect::to('parts');
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
      $part = Part::find($id);
      $part->delete();

      // redirect
      Session::flash('message', 'Usunięto pozycję!');
      return Redirect::to('parts');
    }
}
