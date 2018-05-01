<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->text('Discription');
            $table->integer('autor_id');
            $table->text('tags');
            $table->string('link_pr_img');
            $table->string('link_ai');
            $table->string('link_pdf');
            $table->string('link_cdr');
            $table->string('link_tif');
            $table->string('link_svg');
            $table->string('link_png');
            $table->string('link_jpg');
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('logoes');
    }
}
