<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $table = 'rules';
    protected $fillable = ['symptoms_code', 'troubles_code'];
    protected $visible = ['symptoms_code'];


    public function trouble()
    {
        return $this->belongsTo('\App\Models\Trouble');
    }

    public function symptom()
    {
        return $this->belongsTo('\App\Models\Symptom','symptoms_code','symptoms_code');
    }

    
}
