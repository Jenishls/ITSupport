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
    
    public function show($id)
    {
    	$data = Vendor::findorfail($id);
    	return view('vendor.show',compact('data'));
    }

    public function create()
    {
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

    public function edit($id)
    {
    	$data = Vendor::find($id);
    	return view('vendor.edit',compact('data'));
    }

    public function update(Request $request)
    {
      Vendor::where('id',$request->vendor_id)
                ->update([
                        'name' => $request->name,
                        'address' => $request->address,
                        'pan' => $request->pan,
                        'updated_by' => $request->updated_by, 
                ]);
        return redirect()->route('home');
    }

    public function destroy($id)
    {
        if(!Vendor::find($id)->product()->exists() )
        {
            Vendor::destroy($id);
            return redirect()->route('home');
        }
        $messages = ['Cannot delete Vendor.Vendor has products','Delete its corresponding products first'];
        return redirect()->route('home')->withErrors($messages);
    }
}
