<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id')->unsigned();
            $table->integer('candidate_id')->unsigned()->nullable();
            $table->string('title');
            $table->longText('description');
            $table->string('budget');
            $table->string('thumbnail')->nullable();
            $table->string('company')->nullable();
            $table->integer('topic')->unsigned();
            $table->string('delivery_time')->nullable();
            $table->datetime('hired_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('jobs', function ($table) {
            $table->foreign('employer_id')->references('id')->on('users');
            $table->foreign('candidate_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
