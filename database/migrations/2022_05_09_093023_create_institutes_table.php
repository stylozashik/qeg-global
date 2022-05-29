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
        Schema::create('institutes', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();
            $table->string('name');
            $table->string('short_name')->nullable();
            $table->string('slug');
            $table->integer('founded')->nullable();
            $table->foreignId('origin_id')->constrained('countries');
            $table->foreignId('address_id')->constrained('addresses');
            $table->foreignId('currency_id')->constrained('currencies');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('authorization_by')->nullable();
            $table->string('authorization_id')->nullable();

            $table->double('application_fee')->nullable(); //default application fee

            $table->string('type', 60)->default('public'); //public, private, semi-govt
            $table->string('level', 60)->nullable(); //array(school, secondary, under-grad, post-grad)
            $table->string('agent_commission', 10)->default(0)->comment('eg: 7.5% | 150 base currency'); // can be percentage or flat
            $table->string('logo_square', 60)->nullable();
            $table->string('logo_wide', 60)->nullable();
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
        Schema::dropIfExists('institutes');
    }
};
