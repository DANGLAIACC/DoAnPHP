<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    protected $table="Version";
    use HasFactory;
    public function modals(){
        return $this->hasMany(Modal::class);
    }
}
