<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->unsigned();
            $table->foreignId('candidate_id');
            $table->longText('proposal_text');
            $table->string('budget')->nullable();
            $table->string('comment')->nullable();
            $table->string('url')->nullable();
            $table->datetime('approved_at')->nullable();
            $table->datetime('rejected_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('proposals', function($table) {
            $table->foreign('job_id')->references('id')->on('jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposals');
    }
}
