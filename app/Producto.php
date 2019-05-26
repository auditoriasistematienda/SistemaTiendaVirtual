<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  protected $table = 'productos';
  protected $primaryKey = 'prod_id';
  public $timestamps = false;
  protected $fillable = [
      'prod_nombre',
      'prod_precio',
      'prod_stock'
  ];
  protected $guarded = [];
}
