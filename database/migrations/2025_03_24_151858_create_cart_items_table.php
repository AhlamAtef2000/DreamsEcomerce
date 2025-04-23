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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->constrained()->onDelete('cascade'); // ربط بالسلة
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // ربط بالمنتج
            $table->foreignId('size_id')->constrained()->onDelete('cascade'); // Linking to size
            $table->foreignId('color_id')->constrained()->onDelete('cascade'); // Linking to color
            $table->foreignId('material_id')->constrained()->onDelete('cascade'); // Linking to material
            $table->integer('quantity')->default(1); // الكمية الافتراضية 1
            $table->decimal('price', 10, 2); // سعر المنتج وقت الإضافة
            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
