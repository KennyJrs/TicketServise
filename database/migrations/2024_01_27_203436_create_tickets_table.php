<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('departure_place');
            $table->time('travel_time');
            $table->string('arrival_place');
            $table->double('ticket_price');
            $table->time('departure_time');
            $table->date('departure_date');
            $table->time('arrival_time');
            $table->date('arrival_date');
            $table->string('transporter');
            $table->decimal('transporter_rating');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
