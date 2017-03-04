<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->String('firstName');
            $table->String('lastName');
            $table->String('phone');
            $table->String('degree');
            $table->String('linkedinLink');
            $table->text('objective');
            $table->text('techs');
            $table->integer('user_id');
            $table->integer('achievement_id');
            $table->integer('final_project');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
