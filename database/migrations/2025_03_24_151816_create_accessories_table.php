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
        Schema::create('accessories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id'); // Corrected typo
            $table->foreign('product_id')
                ->references('id')->on('products')->onDelete('cascade'); // Corrected table name
            $table->enum('type', ['brooch', 'embroidery', 'patch', 'badge'])->default('brooch'); // type (e.g., brooch, embroidery)
            $table->string('name'); // accessory name
            $table->decimal('price', 8, 2); // price
            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accessories');
    }
};
