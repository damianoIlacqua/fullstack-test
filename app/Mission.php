<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mission extends Model
{
  use SoftDeletes;

  /*
  --------------------------------------------------------------------------
  SCOPES
  --------------------------------------------------------------------------
  */

  /**
   * Scope not default titles
   */
  public function scopeNotDefaultTitles($query){
    //TODO
  }

  /*
  -----------------------------------
  MODEL RELATIONS
  -----------------------------------
  */

  /**
   * Get user of this conversation
   */
  public function users() {
    //TODO
  }

  /*
  --------------------------------------------------------------------------
  GETS & SETS
  --------------------------------------------------------------------------
  */

  //TODO
}
