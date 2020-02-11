<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use SoftDeletes;

    protected $table = "ticket";
    protected $primary = 'id';
    protected $fillable = ['title','body','category_id','priority','status','created_by','updated_by','deleted_by'];
    public $timestamps = true;

    public function createdBy(){
    	return $this->belongsTo('App\User','created_by');
    }

    public function updatedBy(){
        return $this->belongsTo('App\User','updated_by');
    }

    public function category(){
    	return $this->belongsTo('App\Category','category_id','id');
    }

    public function comment(){
        return $this->hasMany('App\Comment');
    }
}
