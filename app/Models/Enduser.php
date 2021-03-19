<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enduser extends Model
{
    use HasFactory;
    protected $table = 'endusers';
    protected $fillable = [
      'id', 'name', 'phone_number'
    ];

    public function History() {
        return $this->hasMany('App\Models\SymptomHistory');
    }
}
