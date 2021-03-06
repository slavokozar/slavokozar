<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_education', function (Blueprint $table) {
            $table->increments('id');

            $table->string('level');
            $table->string('field');
            $table->string('school');
            $table->date('started_at');
            $table->date('finished_at')->nullable();
            $table->text('description')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('cv_education');
    }
}
