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
        Schema::create('warranties', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('SKU')->nullable();
            $table->string('start')->nullable();
            $table->string('product');
            $table->string('name');
            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('term')->nullable();
            $table->string('branch')->nullable();
            $table->dateTime('expired');
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
        Schema::dropIfExists('warranties');
    }
};
