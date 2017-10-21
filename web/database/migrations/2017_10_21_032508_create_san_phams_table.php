<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSanPhamsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->string('ten')->nullable();
            $table->integer('danh_muc_id')->nullable()->unsigned();
            $table->string('description',500)->nullable();
            $table->string('url')->nullable();
            $table->string('anh')->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('danh_muc_id')->references('id')->on('danh_muc_san_phams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('san_phams');
    }
}
