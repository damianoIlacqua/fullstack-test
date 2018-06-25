<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mission extends Model
{
  use SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'title', 'description',
  ];

  /*
  --------------------------------------------------------------------------
  SCOPES
  --------------------------------------------------------------------------
  */

  /**
   * Scope not default titles
   */
  public function scopeNotDefaultTitles($query){
    return $query->where('title', '<>', 'Mission title'); //--
  }

  /*
  -----------------------------------
  MODEL RELATIONS
  -----------------------------------
  */

  /**
   * Get user of this conversation
   */
   public function user() {
     return $this->belongsTo('App/User');
   }

  /*
  --------------------------------------------------------------------------
  GETS & SETS
  --------------------------------------------------------------------------
  */

  /**
   * Overriding the getAttribute method in order to return "---"
   * when a description is blank or has not been set up.
   */

  public function getAttribute($keyval) {
    $value = parent::getAttribute($keyval);
    if(($value == '' || $value == null) && $keyval == 'description') {
      return '---';
    }
    return $value;
  }

}
