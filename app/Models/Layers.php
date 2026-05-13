<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layers extends Model
{
    protected $table = 'clt_layers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'clt_layup_id',
        'layers_order',
        'thickness',
        'width',
        'angle'
    ];

    public function layups(){
        return $this->belongsTo(Layups::class, 'clt_layup_id', 'id');
    }
}
