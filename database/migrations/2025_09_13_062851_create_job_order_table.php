<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_orders', function (Blueprint $table) {
            $table->id();
            $table->string('job_order_number', 25);
            $table->string('service_type', 25);
            $table->text('description')->nullable();
            $table->date('date_requested')->nullable();
            $table->date('date_started')->nullable();
            $table->date('date_target')->nullable();
            $table->date('date_finished')->nullable();
            $table->string('service_status', 20)->nullable();
            $table->integer('re_job_order_id')->length(10)->nullable();
            $table->integer('customer_id')->length(10);
            $table->integer('employee_id')->length(10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_order');
    }
};
