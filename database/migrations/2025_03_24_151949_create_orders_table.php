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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // foreign key for user
            $table->decimal('total_price', 8, 2); // total price of the order
            $table->enum('status', ['pending', 'shipped', 'delivered', 'cancelled'])->default('pending');
            $table->text('shipping_address'); // shipping address
            $table->string('country'); // Country
            $table->string('first_name'); // First Name
            $table->string('last_name'); // Last Name
            $table->string('address'); // Address (Street address)
            $table->string('apartment')->nullable(); // Apartment, suite, unit etc. (optional)
            $table->string('town_city'); // Town / City
            $table->string('state_county'); // State / County
            $table->string('postcode_zip'); // Postcode / Zip
            $table->string('email'); // Email Address
            $table->string('phone'); // Phone
            $table->text('order_notes')->nullable(); // Order Notes
            $table->string('payment_method'); // Payment method (e.g., Direct Bank Transfer, PayPal)
            $table->foreign('shipping_method_id')->references('id')->on('shipping_methods')->onDelete('cascade');
            $table->unsignedBigInteger('shipping_method_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
