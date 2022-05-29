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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();

            //table column structure will be here
            $table->foreignId('invoice_id')->constrained('invoices');
            $table->foreignId('currency_id')->constrained('currencies');
            $table->string('status');  // Success, failed, cancelled;
            $table->timestamp('tran_date')->nullable();
            $table->string('valid_id');
            $table->double('amount' , 15 , 2);
            $table->double('store_amount' , 15 , 2);
            $table->string('card_type');
            $table->string('card_no');
            $table->string('bank_tran_id');
            $table->string('verify_sign');
            $table->string('verify_key');
            $table->string('risk_level');
            $table->string('risk_title');
            $table->boolean('approve_status');


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
        Schema::dropIfExists('transactions');
    }
};
