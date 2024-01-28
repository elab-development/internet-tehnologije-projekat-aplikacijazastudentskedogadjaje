<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objava extends Model
{
    use HasFactory;

    protected $fillable = [
        'naslov',
        'podnaslov',
        'tekst',
    ];

    public function organizacija(){
        return $this->belongsTo(Organizacija::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}