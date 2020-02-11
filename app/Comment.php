<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
    protected $fillable = ['body','ticket_id','status','created_by','updated_by','deleted_by'];

    public function ticket(){
    	return $this->belongsTo('App\Ticket');
    }

    public function createdBy(){
    	return $this->belongsTo('App\User','created_by');
    }
}
