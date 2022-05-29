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
        Schema::create('refunds', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();

            //table column structure will be here
            $table->foreignId('currency_id')->constrained('currencies');
            $table->string('refund_type');
            $table->foreignId('invoice_id')->constrained('invoices');
            $table->foreignId('invoice_item_id')->constrained('invoice_items');
            $table->double('refund_amount');
            $table->string('request_note' , 500)->nullable();
            $table->foreignId('approved_by')->constrained('regents');
            $table->boolean('approved_status');
            $table->timestamp('approved_at')->nullable();
            $table->boolean('confirmation')->default(0);
            $table->foreignId('confirmed_by')->constrained('regents');
            $table->timestamp('confirmed_at')->nullable();

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
        Schema::dropIfExists('refunds');
    }
};
