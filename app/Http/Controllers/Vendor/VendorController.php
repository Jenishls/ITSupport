<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorController extends Controller
{
  
	  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

	  /**
	   * Show the application dashboard.
	   *
	   * @return \Illuminate\Contracts\Support\Renderable
	   */
    public function index()
    {
        return view('vendor.dashboard');
    }
}
