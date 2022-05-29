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
        Schema::create('course_req_edus', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();
            $table->integer('course_id');
            $table->foreignId('educational_level_id')->constrained('educational_levels');
            $table->boolean('min_percentage_score'); // eg 65%
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
        Schema::dropIfExists('course_req_edus');
    }
};
