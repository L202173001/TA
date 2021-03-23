<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->String('name', 25);
            $table->String('phone_number', 12);
            $table->String('status', 5);
            $table->char('troubles_code', 3) -> nullable();
            $table->foreign('troubles_code')->references('troubles_code')->on('troubles');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('results');
        Schema::enableForeignKeyConstraints();
    }
}
