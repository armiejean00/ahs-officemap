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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete();
            $table->foreignId('desk_id')
                  ->constrained()
                  ->cascadeOnDelete();
            // ? Waiting for confirmation to merge available_desks to bookings
            $table->foreignId('available_desk_id')
                  ->constrained()
                  ->cascadeOnDelete(); // ? Remove
            // $table->date('date'); // ? Add
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
