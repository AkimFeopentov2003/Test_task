<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barcode extends Model
{
    protected $fillable = ['nomenclature_id', 'barcode'];
    public static function getBarcodes($nomenclature)
    {
        $nomenclatureRecord = \App\Models\Nomenclature::where('code', $nomenclature)->first();
        if (!$nomenclatureRecord) {
            if (is_numeric($nomenclature)) {
                $nomenclatureRecord = \App\Models\Nomenclature::find($nomenclature);
                return self::where('nomenclature_id', $nomenclatureRecord->id)->get();
            }
            else {
                return collect();
            }
        }
        return self::where('nomenclature_id', $nomenclatureRecord->id)->get();


    }
}
