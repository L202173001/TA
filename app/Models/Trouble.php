<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trouble extends Model
{
    use HasFactory;
    protected $table = 'troubles';


    protected $fillable = ['troubles_code', 'trouble','solution'];
    protected $primaryKey = 'troubles_code';
    protected $guarded = ['troubles_code'];
    public $incrementing = false;
    protected $keyType = 'char';

    public function rule() {
        return $this->hasMany('App\Models\Rule', 'troubles_code','troubles_code');
    }
}
