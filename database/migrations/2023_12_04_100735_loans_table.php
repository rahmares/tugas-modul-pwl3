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
        Schema::dropIfExists('loans', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->unsignedBigInteger('user_id');
            $table->date('loan_at');
            $table->date('return_at');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('user');
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans');
    }
};
