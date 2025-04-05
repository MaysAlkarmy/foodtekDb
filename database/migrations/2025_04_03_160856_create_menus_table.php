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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string("meal_name");
            $table->string("description");
            $table->string("image");
            $table->string("main_category");
            $table->decimal("price",8,2);
            $table->decimal("rating")->nullable();
            $table->boolean("favorite")->nullable();
            $table->boolean("in_cart")->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
