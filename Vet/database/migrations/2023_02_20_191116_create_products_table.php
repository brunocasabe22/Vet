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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('image')->unique();
            $table->integer('stock');
            $table->decimal('sell_price',12,2);
            $table->enum('status',['ACTIVE','DESACTIVATED'])->default('ACTIVE');
            $table -> unsignedBigInteger('category_id');
            $table-> foreign('user_id')->references('id')->on('categories');
            $table -> unsignedBigInteger('provider_id');
            $table-> foreign('user_id')->references('id')->on('providers');
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
        Schema::dropIfExists('products');
    }
};