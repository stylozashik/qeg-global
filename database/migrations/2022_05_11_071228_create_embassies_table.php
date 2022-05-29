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
        Schema::create('embassies', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();
            $table->foreignId('student_id')->constrained('students');
            $table->string('embassy_from')->length(25);
            $table->string('embassy_to')->length(25);
            $table->timestamp('embassy_facing_date');
            $table->boolean('embassy_status');
            $table->integer('stay_time')->length(3);
            

            //table column structure will be here

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
        Schema::dropIfExists('embassies');
    }
};
