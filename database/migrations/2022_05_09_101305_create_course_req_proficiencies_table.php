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
        Schema::create('course_req_proficiencies', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();
            $table->foreignId('course_id')->constrained('courses');
            $table->string('name'); // ielts|tofel|douling|moi
            $table->string('full_name'); // full name of ielts
            $table->string('group'); //need to meet only one from each group
            $table->double('reading', 4, 2)->nullable();
            $table->double('writing', 4, 2)->nullable();
            $table->double('listening', 4, 2)->nullable();
            $table->double('speaking', 4, 2)->nullable();
            $table->double('overall', 4, 2)->nullable();
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
        Schema::dropIfExists('course_req_proficiencies');
    }
};
