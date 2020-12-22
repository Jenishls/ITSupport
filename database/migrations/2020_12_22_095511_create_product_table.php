<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');

            $table->unsignedBigInteger('vendor_id');
            $table->foreign('vendor_id')
                    ->references('id')->on('vendor');

            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')
                    ->references('id')->on('users');

            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('updated_by')
                    ->references('id')->on('users');

            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->foreign('deleted_by')
                    ->references('id')->on('users');
            $table->softDeletes();

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
        Schema::dropIfExists('product');
    }
}
