<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoTaSanPhamsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mo_ta_san_phams', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->integer('san_pham_id')->nullable()->unsigned();
            $table->string('content',500)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('san_pham_id')->references('id')->on('san_phams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mo_ta_san_phams');
    }
}
