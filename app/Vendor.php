<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
  use SoftDeletes;

  protected $table = 'vendor';
  protected $primary = 'id';
  protected $fillable = ['name','address','pan','created_by','updated_by','deleted_by'];
  public $timestamps = true;

  public function createdBy(){
  	return $this->belongsTo('App\User','created_by');
  }

  public function updatedBy(){
      return $this->belongsTo('App\User','updated_by');
  }

  public function product(){
    return $this->hasMany('App\Product','vendor_id');
  }
}
