<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();
            $table->string('table_name'); // name of foreign table
            $table->integer('table_id'); //foreign fee for relation table

            $table->string('location');
            $table->string('zip_code');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->foreignId('country_id')->constrained('countries');

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
        Schema::dropIfExists('addresses');
    }
};
