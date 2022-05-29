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
        Schema::create('campuses', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();
            $table->foreignId('institute_id')->constrained('institutes');
            $table->foreignId('address_id')->constrained('addresses');
            $table->foreignId('country_id')->constrained('countries');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('geolocation')->nullable();

            $table->string('living_cost')->nullable();

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
        Schema::dropIfExists('campuses');
    }
};
