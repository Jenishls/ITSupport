<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
  use SoftDeletes;

  protected $table = 'product';
  protected $primary = 'id';
  protected $fillable = ['name','vendor_id','created_by','updated_by','deleted_by'];
  public $timestamps = true;

  public function vendor(){
  	return $this->belongsTo('App\Vendor','vendor_id');
  }

  public function createdBy(){
  	return $this->belongsTo('App\User','created_by');
  }

  public function updatedBy(){
      return $this->belongsTo('App\User','updated_by');
  }
}