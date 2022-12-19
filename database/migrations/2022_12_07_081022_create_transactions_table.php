<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('storename')->nullable();
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->double('amount',10,2)->default(0);
            $table->double('discount',10,2)->default(0);
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('participant')->nullable();
            // $table->string('trainingdate')->nullable();
            $table->unsignedBigInteger('schedule_id');
            $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('cascade');
            // $table->unsignedBigInteger('user_id')->comment('ID ผู้เชี่ยวชาญ');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('company')->nullable();
            $table->char('vatnumber',13)->nullable();
            $table->string('promocode')->nullable();
            $table->string('source_id')->nullable();
            $table->string('charge_id')->nullable();
            $table->string('paymentdate')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
