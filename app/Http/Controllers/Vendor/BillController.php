<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('vendor.bill.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function upload(Request $request)
    {

        // dd($request->all());

        // $this->validate($request, [
        //     // 'name' => 'required',
        //     'files'=>'required',
        // ]);
        if($request->hasFile('files'))
        {
            $allowedfileExtension=['pdf','jpg','png'];
            $files = $request->file('files');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                //dd($check);
                if($check)
                {
                    // $items= Item::create($request->all());
                    foreach ($request->files as $photo) {
                        // $filename = $photo->store('files');
                        $name = time().'.'.$photo->extension();
                        $file->move(public_path().'/files/', $name);  
                        // ItemDetail::create([
                        //     'item_id' => $items->id,
                        //     'filename' => $filename
                        // ]);
                    }
                    return redirect()->with('success','Bill Uploaded');
                }
                else
                {
                    return redirect()->withErrors('message','Bill upload failed!');
                }
            }
        }

    }
}
