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

class Certificate extends Model
{
    use SoftDeletes;

    protected $table = 'cv_certificates';

    protected $fillable = [
        'name',
        'authority',
        'started_at',
        'finished_at',
        'description'
    ];
}