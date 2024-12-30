<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keystroke extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'input_type',
        'keystroke'
    ];
}
