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
        Schema::create('student_education', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();
            $table->foreignId('student_id')->constrained('students');
            $table->string('degree_name');
            $table->foreignId('institute_id')->nullable()->constrained('institutes');
            $table->string('institute_name')->nullable();
            $table->foreignId('country_id')->constrained('countries');
            $table->foreignId('level_id')->constrained('educational_levels');
            $table->string('moi', 100)->nullable(); //medium of instruction eg:Bangla|English|Franch
            $table->date('attend_from_date')->nullable();
            $table->date('attend_till_date')->nullable();
            $table->date('certification_date')->nullable();

            $table->string('certificate_path')->nullable();
            $table->string('marksheet_path')->nullable();

            //grading_scheme
            //grade_avg
            //graduation_status
            //graduation_date

            //certification_date
            //school_address
            //school_city
            //school_zip
            //school_provinence
            //test_score
            //gre_score
            //gmat_score

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
        Schema::dropIfExists('student_education');
    }
};
