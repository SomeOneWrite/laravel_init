<?php
/**
 * Created by PhpStorm.
 * User: NTC
 * Date: 01.08.2019
 * Time: 14:30
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Party extends Model
{
    use SoftDeletes;
    protected $table = "party";
}