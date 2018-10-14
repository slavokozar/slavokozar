<?php
/**
 * Created by PhpStorm.
 * User: slavo
 * Date: 7.8.18
 * Time: 22:44
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Education extends Model
{
    use SoftDeletes;

    protected $table = 'cv_education';

    protected $fillable = [
        'level',
        'field',
        'school',
        'started_at',
        'finished_at',
        'description'
    ];
}