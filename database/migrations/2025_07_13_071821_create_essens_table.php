<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('essens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->decimal('price', 8, 2);
            $table->text('description')->nullable();
            $table->string('category')->nullable();
            $table->boolean('is_available')->default(true);
            $table->timestamps();
        });
    }


    public function down(): void{
        Schema::dropIfExists('essens');
    }
};
