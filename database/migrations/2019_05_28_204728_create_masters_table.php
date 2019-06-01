<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masters', function (Blueprint $table) {
            $table->char('prefecture_cd', '2')->primary();
            $table->string('prefecture_name', '20');
            $table->datetime('insert_date');
            $table->char('insert_cd', '5');
            $table->datetime('update_date');
            $table->char('update_cd', '5');
            $table->datetime('delete_date');
            $table->char('delete_cd', '5');
            $table->char('delete_flg', '1');
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
        Schema::dropIfExists('masters');
    }
}
