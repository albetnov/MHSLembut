<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_lists', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('title');
            $table->string('photo')->nullable();
            $table->string('link_yt')->nullable();
            $table->string('link_twitter')->nullable();
            $table->string('link_ig')->nullable();
            $table->text('deskripsi');
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
        Schema::dropIfExists('team_lists');
    }
}
