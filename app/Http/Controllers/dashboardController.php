<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
  public function showDashboard(){
      return view('backend.dashboard');
  }
}
