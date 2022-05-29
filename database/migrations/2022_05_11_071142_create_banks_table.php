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
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();
            $table->foreignId('currency_id')->constrained('currencies');
            $table->string('relation_table');
            $table->integer('relation_id');
            $table->foreignId('gateway_id')->constrained('payment_gateways');
            $table->string('bank_name')->length(250);
            $table->string('branch_name')->length(50);
            $table->foreignId('address_id')->constrained('addresses');
            $table->string('account_name')->length(50);
            $table->string('account_number')->length(50);
            $table->string('swift_code')->nullable();
            $table->longText('comment')->nullable();
            $table->boolean('active_status')->default(1);


            

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
        Schema::dropIfExists('banks');
    }
};
