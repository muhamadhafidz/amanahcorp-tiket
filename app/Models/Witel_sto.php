<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Witel_sto extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function measuring_indications() {
        return $this->hasMany(Measuring_indication::class, 'sto', 'sto');
    }
}
