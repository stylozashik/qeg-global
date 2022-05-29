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
        Schema::create('commission_structures', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();
            $table->foreignId('currency_id')->constrained('currencies');
            $table->foreignId('agent_id')->nullable()->constrained('agents'); //nullable for only default
            //default will be clone for new agent automatically
            $table->foreignId('institute_id')->constrained('institutes');
            $table->foreignId('course_id')->constrained('courses');
            $table->string('commission_type')->default('fixed'); // percentage|fixed
            $table->boolean('min')->nullable();
            $table->boolean('max')->nullable();
            $table->boolean('tax')->nullable();
            $table->string('tax_type')->default('inclusive'); // inclusive|exclusive
            $table->string('depend_on')->nullable(); //student wise|application wise
            $table->string('condition')->nullable();

            //commission_id
            //currency_id
            //agent_id
            //institute_id
            //course_id
            //commission_type
            //min
            //max
            //tax
            //tax_type
            //depend_on
            //condition

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
        Schema::dropIfExists('commission_structures');
    }
};
