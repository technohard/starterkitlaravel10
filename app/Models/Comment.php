<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Comment extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'comments';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = ['id'];

    // Jika ingin kontrol pembuatan UUID manual:
    protected static function booted()
    {
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
