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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();
            $table->foreignId('institute_id')->constrained('institutes');
            $table->string('name');
            $table->string('short_name');
            $table->foreignId('educational_level')->constrained('educational_levels'); //educational level
            $table->foreignId('require_educational_level')->constrained('educational_levels'); //need to meet for apply
            $table->integer('total_credit')->nullable();
            $table->integer('length_in_month');

            $table->double('tuition_fee_total');
            $table->double('application_fee');

            $table->boolean('transferable')->default(0);
            $table->boolean('foreign_acceptance')->default(0);

            $table->integer('work_permit_hour')->nullable();
            $table->boolean('scholarship_facility')->default(0);
            $table->boolean('dormitory_facility')->default(0);
            $table->boolean('transport_facility')->default(0);
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('courses');
    }
};
