<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Homeinfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeinfo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('welcometitle');
            $table->string('welcomecontent');
            $table->string('ete_first_title');
            $table->string('ete_first_content');
            $table->string('ete_second_title');
            $table->string('ete_second_content');
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
        //
    }
}
