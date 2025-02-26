<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nomenclature extends Model
{
    protected $fillable = ['code', 'name'];

    protected $table = 'nomenclature';
    public function barcodes()
    {
        return $this->hasMany(Barcode::class);
    }
}
