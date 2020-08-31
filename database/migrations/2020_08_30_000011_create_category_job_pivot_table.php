<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryJobPivotTable extends Migration
{
    public function up()
    {
        Schema::create('category_job', function (Blueprint $table) {

            $table->integer('job_id')->unsigned();
            $table->integer('category_id')->unsigned();
        });

        Schema::table('category_job', function ($table) {
            $table->foreign('job_id')->references('id')->on('jobs');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }
}
