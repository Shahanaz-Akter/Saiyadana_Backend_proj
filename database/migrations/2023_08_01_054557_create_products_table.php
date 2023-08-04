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
            $table->string('super_category_name')->nullable();
            $table->string('super_category_image')->nullable();
            $table->string('unicode')->nullable();

            $table->string('sub_category_name')->nullable();
            $table->string('sub_category_primary_image')->nullable();
            $table->json('sub_category_secondary_image')->nullable();
            $table->string('price')->nullable();
            $table->string('sku_code')->nullable();
            $table->date('entry_date')->nullable();
            $table->date('expire_date')->nullable();
            $table->bigInteger('regular_price')->nullable();
            $table->bigInteger('discount_price')->nullable();
            $table->string('description', 2000)->nullable();
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
