<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Result extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'results';

    protected $fillable = [
      'id', 'name', 'phone_number', 'troubles_code', 'status'
    ];

    public function History() {
        return $this->hasMany('App\Models\SymptomHistory');
    }

    public function Trouble() {
        return $this->belongsTo('App\Models\Trouble', 'troubles_code','troubles_code');
    }
}
