<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarcodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('barcodes')->insert([
            ['nomenclature_id' => 1, 'barcode' => '123456789012'],
            ['nomenclature_id' => 1, 'barcode' => '123456789013'],
            ['nomenclature_id' => 1, 'barcode' => '123456789014'],
            ['nomenclature_id' => 1, 'barcode' => '123456789015'],
            ['nomenclature_id' => 1, 'barcode' => '123456789016'],
            ['nomenclature_id' => 2, 'barcode' => '234567890123'],
            ['nomenclature_id' => 2, 'barcode' => '234567890124'],
            ['nomenclature_id' => 2, 'barcode' => '234567890125'],
            ['nomenclature_id' => 2, 'barcode' => '234567890126'],
            ['nomenclature_id' => 2, 'barcode' => '234567890127'],
            ['nomenclature_id' => 3, 'barcode' => '345678901234'],
            ['nomenclature_id' => 3, 'barcode' => '345678901235'],
            ['nomenclature_id' => 3, 'barcode' => '345678901236'],
            ['nomenclature_id' => 3, 'barcode' => '345678901237'],
            ['nomenclature_id' => 3, 'barcode' => '345678901238'],
            ['nomenclature_id' => 4, 'barcode' => '456789012345'],
            ['nomenclature_id' => 4, 'barcode' => '456789012346'],
            ['nomenclature_id' => 4, 'barcode' => '456789012347'],
            ['nomenclature_id' => 4, 'barcode' => '456789012348'],
            ['nomenclature_id' => 4, 'barcode' => '456789012349'],
            ['nomenclature_id' => 5, 'barcode' => '567890123456'],
            ['nomenclature_id' => 5, 'barcode' => '567890123457'],
            ['nomenclature_id' => 5, 'barcode' => '567890123458'],
            ['nomenclature_id' => 5, 'barcode' => '567890123459'],
            ['nomenclature_id' => 5, 'barcode' => '567890123460'],
        ]);
    }
}
