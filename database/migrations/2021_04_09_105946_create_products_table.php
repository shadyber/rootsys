<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('title');
            $table->longText('detail');
            $table->string('photo')->default('/images/items/item.jpg');
            $table->string('thumb')->default('/images/items/item.jpg');

            $table->string('price')->default('0');
            $table->string('spec')->default('[]');
            $table->string('tags')->default('product,');
            $table->integer('init_qnt')->default(0);
            $table->string('badge')->default('new');
            $table->bigInteger('product_category_id')->unsigned();
            $table->foreign('product_category_id')->references('id')->on('product_categories');

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
}
