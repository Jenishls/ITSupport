<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTicket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('body');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                    ->references('id')->on('categories');

            $table->string('priority');
            $table->string('status')->nullable();

            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')
                    ->references('id')->on('users');

            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('updated_by')
                    ->references('id')->on('users');

            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->foreign('deleted_by')
                    ->references('id')->on('users');

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
        Schema::dropIfExists('table_ticket');
    }
}
