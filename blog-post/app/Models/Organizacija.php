<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizacija extends Model
{
    use HasFactory;

    protected $fillable = [
        'imeOrganizacije',
        'vrstaDogadjaja',
    ];

    public function objave(){
        return $this->hasMany(Objava::class);
    }
}
