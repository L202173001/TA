<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SymptomHistory extends Model
{
    use HasFactory;
    protected $table = 'symptom_history';
    protected $fillable = [
      'id', 'enduser_id', 'result_id', 'symptoms_code', 'status'
    ];

    public function SymptomCode() {
      return $this->belongsTo('App\Models\Symptom','symptoms_code','symptoms_code');
    }

    public function Result() {
      return $this->belongsTo('App\Models\Result');
    }
}
