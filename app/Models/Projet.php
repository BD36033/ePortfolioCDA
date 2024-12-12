<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'designation', 
        'description',
        'language',
        'environnement',
        'logiciel',
        'url'
    ] ;

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($projet) {
            $projet->slug = Str::slug($projet->designation);
        });
        
        static::updating(function ($projet) {
            $projet->slug = Str::slug($projet->designation);
        });
    }
}
