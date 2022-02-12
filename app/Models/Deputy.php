<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deputy extends Model
{
    use HasFactory;
    protected $table = 'deputies';
    protected $guarded = [];

    public function absence() {
        return $this->hasMany(Absence::class);
    }

}
