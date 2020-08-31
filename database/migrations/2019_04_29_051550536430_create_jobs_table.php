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
            $table->foreignId('employer_id');
            $table->foreignId('candidate_id')->nullable();
            $table->string('title');
            $table->longText('description');
            $table->string('budget');
            $table->string('company')->nullable();
            $table->string('topic')->nullable();
            $table->string('delivery_time')->nullable();
            $table->datetime('hired_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}