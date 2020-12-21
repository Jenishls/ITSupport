<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
  use SoftDeletes;

  protected $table = 'vendor'
  protected $primary = 'id';
  protected $fillable = ['name','address','pan','created_by','updated_by','deleted_by'];
  public $timestamps = true;
}
