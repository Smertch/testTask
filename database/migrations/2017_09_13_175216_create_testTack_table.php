<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testTask', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('code');
            $table->tinyInteger('type');
            $table->enum('status', ["получено", "прочитано", "исправлено"])->default("получено");
            $table->string('application', 20);
            $table->string('message', 1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testTaskTable');
    }
}
