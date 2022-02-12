<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reason extends Model
{
    use HasFactory;
    protected $table = 'reasons';
    protected $guarded = [];

    public function absence() {
        return $this->hasMany(Absence::class);
    }
}
