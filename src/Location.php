<?php

namespace Scool\Foundation;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Location.
 *
 * @package Scool\Foundation
 */
class Location extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['code','name'];
}
