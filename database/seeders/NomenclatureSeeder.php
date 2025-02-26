<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NomenclatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('nomenclature')->insert([
            ['code' => '001', 'name' => 'Product 1'],
            ['code' => '002', 'name' => 'Product 2'],
            ['code' => '003', 'name' => 'Product 3'],
            ['code' => '004', 'name' => 'Product 4'],
            ['code' => '005', 'name' => 'Product 5'],
        ]);
    }
}
