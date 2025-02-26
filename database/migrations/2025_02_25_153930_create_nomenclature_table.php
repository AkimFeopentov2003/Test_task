<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nomenclature', function (Blueprint $table) {
            $table->id(); // auto increment id
            $table->string('code'); // добавляем колонку code
            $table->string('name'); // добавляем колонку name
            $table->timestamps(); // добавляем timestamp для created_at и updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nomenclature');
    }
};
