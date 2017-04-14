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

class StockController extends Controller
{
  public function __construct()
      {
          $this->middleware('auth');
          $this->middleware('shipments_read')->only(['index' , 'show' ]);
      }


      public function index()
      {

        $summary = Shipment::groupBy('part_id')->where([['service_id', '=', Auth::user()->service_id],])
    ->selectRaw('sum(quantity) as sum, part_id')->get();

        $shipments = Shipment::orderBy('date', 'desc')->where('service_id', Auth::user()->service_id)->get();
        $parts = Part::all();
        $users = User::all();

        return View::make('stock', compact('shipments', 'parts', 'users', 'summary'));
      }
}
