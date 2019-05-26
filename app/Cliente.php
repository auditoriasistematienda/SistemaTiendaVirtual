<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
  protected $table = 'cliente';
  protected $primaryKey = 'cli_id';
  public $timestamps = false;
  protected $fillable = [
      'cli_dni',
      'cli_nombres',
      'cli_apellidos',
  ];
  protected $guarded = [];
}
