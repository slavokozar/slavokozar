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

class Experience extends Model
{
    use SoftDeletes;

    protected $table = 'cv_experience';

    protected $fillable = [
        'position',
        'company',
        'started_at',
        'finished_at',
        'description'
    ];
}