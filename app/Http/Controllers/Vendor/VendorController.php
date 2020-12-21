<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vendor;

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
    	$datas = Vendor::all();
      return view('vendor.dashboard',compact('datas'));
    }

    public function create()
    {
    	$datas = Vendor::all();
      return view('vendor.create');
    }

    public function store(Request $request)
    {
        Vendor::create([
            'name' => request('name'),
            'address' => request('address'),
            'pan' => request('pan'),
            'created_by' => auth()->user()->id 
        ]);
        return redirect('/');
    }
}
