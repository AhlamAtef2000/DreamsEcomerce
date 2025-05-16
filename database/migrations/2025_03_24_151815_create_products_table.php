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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id'); // Corrected typo
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); 
            $table->string('name'); // product name
            $table->text('description'); // description
            $table->decimal('price', 8, 2); // price
            $table->unsignedInteger('stock')->default(0);
            $table->boolean('is_on_sale')->default(false); // Add the is_on_sale column with a default value of false
            $table->unsignedBigInteger('status_id')->nullable(); // Foreign key for statuses
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('set null');
            $table->integer('discount_percentage')->nullable();
            $table->date('sale_end_date')->nullable();
            $table->softDeletes();
            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
