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
        Schema::create('commons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description_formatted');
            $table->text('description_unformatted');
            $table->timestamps();
        });

        DB::table('commons')->insert(array('name' => 'terms & condition','description_formatted' => 'test','description_unformatted' => 'test'));
        DB::table('commons')->insert(array('name' => 'include/exclude','description_formatted' => 'test','description_unformatted' => 'test'));
        DB::table('commons')->insert(array('name' => 'description','description_formatted' => 'test','description_unformatted' => 'test'));
        DB::table('commons')->insert(array('name' => 'notes','description_formatted' => 'test','description_unformatted' => 'test'));
        DB::table('commons')->insert(array('name' => 'holiday packages - terms & condition','description_formatted' => 'test','description_unformatted' => 'test'));
        DB::table('commons')->insert(array('name' => 'holiday packages - policy','description_formatted' => 'test','description_unformatted' => 'test'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commons');
    }
};
