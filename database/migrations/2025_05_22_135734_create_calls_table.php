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
       Schema::create('calls', function (Blueprint $table) {
    $table->id();
    $table->foreignId('host_id')->constrained('users');
    $table->string('channel_name');
    $table->integer('duration')->nullable(); // in seconds or minutes
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calls');
    }
};


