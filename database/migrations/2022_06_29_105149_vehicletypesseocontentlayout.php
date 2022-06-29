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
        Schema::create('vehicletypesseocontentlayout', function (Blueprint $table) {
            $table->id();
            $table->text('heading')->nullable();
            $table->text('description')->nullable();
            $table->text('description_unformatted')->nullable();
            $table->bigInteger('vehicletypesseo_id');
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
        Schema::dropIfExists('vehicletypesseocontentlayout');
    }
};
