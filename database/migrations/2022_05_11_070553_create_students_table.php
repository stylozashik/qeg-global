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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();
            $table->foreignId('agent_id')->nullable()->constrained('agents');
            $table->string('first_name', 100);
            $table->string('middle_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->foreignId('birth_country_id')->constrained('countries');
            $table->foreignId('citizen_country_id')->nullable()->constrained('countries');
            $table->string('first_language', 100)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('passport_number', 100)->nullable();
            $table->date('passport_expiry_date')->nullable();
            $table->string('marital_status', 30)->nullable();
            $table->string('email', 100)->unique();
            $table->string('mobile', 20)->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('skype')->nullable();
            $table->string('messenger')->nullable();


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
        Schema::dropIfExists('students');
    }
};
