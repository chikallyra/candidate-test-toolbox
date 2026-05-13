<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Layups extends Model
{
    protected $table = 'clt_layups';
    protected $primaryKey = 'id';

    protected $fillable = ['supplier_id', 'name'];

    public function supplier(){
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }

    public function layers(){
        return $this->hasMany(Layers::class, 'clt_layup_id', 'id');
    }
}
