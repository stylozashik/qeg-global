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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();

            //table column structure will be here
            $table->foreignId('currency_id')->constrained('currencies');
            $table->foreignId('gateway_id')->constrained('payment_gateways');
            $table->foreignId('invoice_id')->constrained('invoices');
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('agent_id')->constrained('agents');
            $table->double('amount' , 15 , 2);
            $table->string('payment_type');
            $table->string('process_by');
            $table->boolean('payment_status')->default(1);


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
        Schema::dropIfExists('payments');
    }
};
