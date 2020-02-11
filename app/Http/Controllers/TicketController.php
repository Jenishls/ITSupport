<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\Category;
use Illuminate\Http\Request;

class TicketController extends Controller
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
    public function create()
    {
        $cats = Category::all();
        return view('ticket.create',compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ticket::create([
            'title' => request('title'),
            'body' => request('body'),
            'priority' => request('priority'),
            'category_id' => request('category'),
            'status' => 'New',
            'created_by' => auth()->user()->id 
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        return view('ticket.show',compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->toArray());
        Ticket::where('id',$request->ticket_id)
                ->update([
                        'Status' => "Closed",
                        'updated_by' => $request->updated_by, 
                ]);
        return redirect()->route('showTicket', [$request->ticket_id]);
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function updateProcess(Request $request)
    {
        // dd($request->toArray());
        Ticket::where('id',$request->ticket_id)
                ->update([
                        'Status' => "Process",
                        'updated_by' => $request->updated_by, 
                ]);
        return redirect()->route('showTicket', [$request->ticket_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }

    public function closed(){
        // dd('sdfds');
        $datas = Ticket::where('status','Closed')->get();
        return view('ticket.closed',compact('datas'));
    }
}
