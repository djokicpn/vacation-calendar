<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;
    protected $table = 'absences';
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function reason() {
        return $this->belongsTo(Reason::class);
    }

    public function deputy() {
        return $this->belongsTo(Deputy::class);
    }

}
