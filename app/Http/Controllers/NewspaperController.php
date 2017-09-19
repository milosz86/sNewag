<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\User;
use App\Part;
use App\Newspaper;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class NewspaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      Carbon::setLocale('pl');
      $users = User::all();
      $services = Service::all();
      $newspapers = Newspaper::orderBy('created_at', 'desc')->get();
      return View::make('newspapers/index', compact('users', 'services', 'newspapers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('newspapers/create');
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
            'title' => 'required',
            'body' => 'required',
            'img' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);


        // process the login
        if ($validator->fails()) {
            return Redirect::to('create')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            // store
            $newspaper = new Newspaper;
            $newspaper->user_id       = Auth::id();
            $newspaper->service_id    = Auth::user()->service_id;
            $newspaper->title          = Input::get('title');
            $newspaper->body        = Input::get('body');
            $newspaper->img        = Input::get('img');
            $newspaper->save();

            // redirect
            Session::flash('message', 'Dodano news!');
            return Redirect::to('/');
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
