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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->String('name')->nullabel();
            $table->String('email')->nullabel();
            $table->String('date')->nullabel();
            $table->String('department')->nullabel();
            $table->String('number')->nullabel();
            $table->String('message')->nullabel();
            $table->String('status')->nullabel();
            $table->String('user_id')->nullabel();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
