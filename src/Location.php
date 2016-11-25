<?php

namespace Scool\Foundation;

use Acacha\Names\Traits\Nameable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Location.
 *
 * @package Scool\Foundation
 */
class Location extends Model
{
    use Nameable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
