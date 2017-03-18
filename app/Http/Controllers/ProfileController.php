<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\User;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
public function show(){
//Gets logged user all data:
$logged = Auth::user();
//Gets logged user id column value:
$lid = $logged->id;
//Gets all data form users table:
$users = User::where('id', $lid)->get();
//Returns View
return view('profile',compact('users','lid'));
}
}
