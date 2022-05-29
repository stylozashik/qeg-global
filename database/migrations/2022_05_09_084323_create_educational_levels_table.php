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
        Schema::create('educational_levels', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();
            $table->string('group')->nullable(); //primary, secondary, under graduation, graduation, postgraduation, doctorate, PHD
            $table->string('name');
            $table->integer('order'); //level define
            $table->longText('instruction');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educational_levels');
    }
};
