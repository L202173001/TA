<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Symptom extends Model
{
    use HasFactory;

    protected $fillable = ['symptoms_code', 'symptom'];
    protected $primaryKey = 'symptoms_code';
    public $incrementing = false;
    protected $keyType = 'char';

    public function rule() {
        return $this->hasMany('App\Models\Rule', 'symptoms_code','symptoms_code');

    }
}
