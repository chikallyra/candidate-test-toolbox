<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    protected $primaryKey = 'id';

    protected $fillable = ['name'];

    public function layups(){
        return $this->hasMany(Layups::class, 'supplier_id', 'id');
    }
}
