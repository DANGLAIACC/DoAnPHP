<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manu extends Model
{
    protected $table = "manu";
    public $incrementing = false;

    use HasFactory;
    public function versions()
    {
        return $this->hasMany(Version::class);
    }
}
