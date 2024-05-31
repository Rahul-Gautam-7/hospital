<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory;
    use softDeletes;
    protected $guarded =[];

    public function getMedicine()
    {
       return $this->hasMany(Medicines::class,'patient_id','id');
      
    }
}
