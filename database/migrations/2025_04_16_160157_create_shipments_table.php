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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');  // Link to the order
            $table->string('shipment_status')->default('pending'); // Shipment status (e.g., pending, shipped, delivered)
            $table->string('tracking_number')->nullable();  // Tracking number (optional)
            $table->text('shipping_address');
            $table->string('shipping_method')->nullable();  // e.g., standard, expedited
            $table->decimal('shipping_cost', 10, 2)->default(0); // Cost of shipment
            $table->timestamp('shipped_at')->nullable();  // Date when the shipment was shipped
            $table->timestamp('delivered_at')->nullable();  // Date when the shipment was delivered
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
