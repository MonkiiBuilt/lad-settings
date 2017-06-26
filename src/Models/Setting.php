<?php
/**
 * @author Jonathon Wallen
 * @date 26/6/17
 * @time 1:51 PM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */

namespace MonkiiBuilt\LadSettings\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'lad_settings';

    protected $fillable = [
        'name',
        'value',
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

}