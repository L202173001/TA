<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $table = 'results';
    protected $fillable = [
      'id', 'troubles_code'
    ];

    public function Trouble() {
        return $this->belongsTo('App\Models\Trouble', 'troubles_code','troubles_code');
    }
}
