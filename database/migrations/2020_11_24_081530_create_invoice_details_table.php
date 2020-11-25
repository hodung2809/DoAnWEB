<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->integer("invoice_id")->unsigned()->index();
            $table->integer("ticket_id")->unsigned()->index();
            $table->foreign("invoice_id")->references("id")->on("invoices");
            $table->foreign("ticket_id")->references("id")->on("tickets");
            $table->integer("quantity");
            $table->boolean("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_details');
    }
}