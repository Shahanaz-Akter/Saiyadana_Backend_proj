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
            $table->string('super_category_name');
            $table->string('super_category_image');
            $table->string('unicode');
            $table->string('sub_category_name');
            $table->string('sub_category_primary_image');
            $table->json('sub_category_secondary_image');
            $table->string('price');
            $table->string('sku_code');
            $table->date('entry_date');
            $table->date('expire_date');
            $table->bigInteger('regular_price');
            $table->bigInteger('discount_price');
            $table->string('description', 2000);

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
