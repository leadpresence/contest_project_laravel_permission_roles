<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenges', function (Blueprint $table) {

            $table->Increments('id');
            // $table->contest_id;
            // $table->user_id;contests_id
            $table->string('team_name');
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('contests_id');
            $table->string('team_url');
            $table->string('demo_url');
            $table->text('team_description');
            $table->text('team_intention');
            $table->string('team_city');
            $table->string('phone');
            $table->string('email');
            $table->integer('team_size')->default(1);
            $table->string('idea_category');
            $table->text('experience');
            $table->text('idea_motivation');
            $table->text('idea_comprehension');
            $table->text('miscellaneous_info')->nullable();
            $table->string('how_you_heard_about_us');
            $table->integer('status')->default(0)->nullable();
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
        Schema::dropIfExists('challenges');
    }
}
