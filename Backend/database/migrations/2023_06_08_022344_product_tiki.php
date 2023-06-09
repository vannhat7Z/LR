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
        Schema::create('product_lazada', function (Blueprint $table) {
                        $table->increments('id');
                        $table->string('name', 100);
                        $table->integer('type_id', 10);
                        $table->string('description', 20);
                        $table->float('unit_price');
                        $table->float('promotion_price');
                        $table->string('image',255);
                        $table->string('unit');
                        $table->integer('new');
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
        Schema::dropIfExists('product_lazadas');
    }
};
