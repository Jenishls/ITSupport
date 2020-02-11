<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\User;
use App\Category;

class ChartController extends Controller
{
	public function index(){
		$ticket = Ticket::all();
		$users = User::where('isAdmin',1)->get();
		$categories = Category::all();
		
		return view('charts.index',compact('ticket','users','categories'));
	}

}
