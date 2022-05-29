<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agent extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        static::creating(function($model)
        {
            $model['code'] = uniqid();
        });
        self::updating(function ($model) {
            //
        });
        static::deleting(function ($model)
        {
            //
        });
    }

//    public function relations {
//        $this->hasMany();
//    }

}
