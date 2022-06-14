<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outstations', function (Blueprint $table) {
            $table->id();
            $table->string('booking_type');
            $table->bigInteger('vehicletype_id');
            $table->bigInteger('vehicle_id');
            $table->bigInteger('state_id');
            $table->bigInteger('city_id');
            $table->integer('default_notes')->default(1);
            $table->text('notes')->nullable();
            $table->text('notes_formatted')->nullable();
            $table->integer('default_description')->default(1);
            $table->text('description')->nullable();
            $table->text('description_formatted')->nullable();
            $table->integer('default_terms_condition')->default(1);
            $table->text('terms_condition')->nullable();
            $table->text('terms_condition_formatted')->nullable();
            $table->integer('default_include_exclude')->default(1);
            $table->text('include_exclude')->nullable();
            $table->integer('include_exclude_formatted')->nullable();
            $table->decimal('one_way_price_per_km', 7, 2);
            $table->decimal('round_price_per_km', 7, 2);
            $table->decimal('additional_price_festival', 7, 2);
            $table->decimal('additional_price_weekend', 7, 2);
            $table->decimal('advance_during_booking', 7, 2);
            $table->decimal('advance_during_travel_start', 7, 2);
            $table->decimal('advance_during_travel_complete', 7, 2);
            $table->decimal('gst', 7, 2);
            $table->decimal('discount', 7, 2);
            $table->integer('min_km_per_day1');
            $table->integer('min_km_per_day2');
            $table->integer('driver_charges_per_day');
            $table->integer('driver_charges_per_night');
            $table->string('from_date')->nullable();
            $table->string('to_date')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outstations');
    }
};
