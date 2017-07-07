<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_name');
            $table->string('item_info');
            $table->string('username');
            $table->string('user_e_mail');
            $table->datetime('regesterd_date');
            $table->datetime('due_date');
            $table->binary('item_file');
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
        Schema::drop('items_tables');
    }
}
