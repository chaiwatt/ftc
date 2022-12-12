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
        Schema::create('promo_codes', function (Blueprint $table) {
            $table->id();
            $table->string('campaignname')->nullable();
            $table->string('name')->nullable();
            $table->date('startdate')->nullable();
            $table->date('finishdate')->nullable();
            $table->char('status',1)->default(0);
            $table->char('showpage',1)->default(0);
            $table->char('percentdiscount',2)->default(0);
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
        Schema::dropIfExists('promo_codes');
    }
};
