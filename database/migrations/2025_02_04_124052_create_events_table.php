<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('eventName');
            $table->text('description')->nullable();
            $table->date('eventDate');
            $table->time('eventTime');
            $table->string('eventLocation');
            $table->integer('capacity')->default(0);
            $table->boolean('paid')->default(false);
            $table->enum('eventNature', ['public', 'private'])->default('public');
            $table->foreignId('organizer_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
