<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Ticket;

class Category extends Model
{
    use SoftDeletes;
    protected $table = 'categories';
    protected $primary = 'id';

    public function createdBy(){
    	return $this->belongsTo('App\User','created_by');
    }

    public function ticket(){
    	return $this->hasMany('App\Ticket');
    }
}
