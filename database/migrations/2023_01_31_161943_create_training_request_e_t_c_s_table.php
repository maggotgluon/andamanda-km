<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_request_e_t_c_s', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->json('data');

            $table->datetime('training_dateReview')->nullable(); //approved date
            $table->string('user_review')->nullable(); // who approve

            $table->datetime('training_dateApprove')->nullable(); //approved date
            $table->string('user_approve')->nullable(); // who approve

            $table->integer('status'); // status 0 pending 1 approved -1 reject

            $table->foreignId('user_id');
            $table->string('remark')->nullable(); // who approve
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
        Schema::dropIfExists('training_request_e_t_c_s');
    }
};
