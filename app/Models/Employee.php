<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['nom', 'matricule','prenom', 'fonction'];

    public function presences()
    {
        return $this->hasMany(Presence::class);
    }
}
