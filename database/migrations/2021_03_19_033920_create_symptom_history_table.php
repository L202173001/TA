<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSymptomHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('symptom_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('result_id');
            $table->char('symptoms_code', 3);
            $table->foreign('symptoms_code')->references('symptoms_code')->on('symptoms')->onDelete('cascade');
            $table->foreign('result_id')->references('id')->on('results')->onDelete('cascade');
            $table->timestamps();
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
        Schema::dropIfExists('symptom_history');
        Schema::enableForeignKeyConstraints();

    }
}
