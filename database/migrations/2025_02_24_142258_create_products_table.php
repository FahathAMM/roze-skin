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
            $table->string('name');
            $table->text('description');
            $table->string('sku')->unique();
            $table->string('brand_id')->nullable();
            $table->string('category_id');
            $table->integer('quantity')->default(0); // number of items in the pack
            $table->decimal('simple_original_price', 8, 2)->nullable();
            $table->decimal('simple_sale_price', 8, 2)->nullable();
            $table->decimal('simple_price', 10, 2)->nullable();
            $table->string('status')->default('active');
            $table->string('main_image');
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('slug')->nullable();
            $table->string('warranty')->nullable();
            $table->text('features')->nullable();
            $table->text('specifications')->nullable();
            $table->text('short_desc')->nullable();
            $table->string('display_disc')->nullable();
            $table->json('tags')->nullable();
            $table->decimal('weight', 8, 2)->nullable();
            $table->string('dimensions')->nullable();
            $table->string('condition')->nullable();
            $table->string('file_category')->nullable();
            $table->integer('is_available')->default(1);
            $table->integer('is_warrenty_available')->default(1);
            $table->integer('view_count')->default(1);

            $table->timestamps();
        });

        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('type'); // 'single' or 'pack'
            $table->decimal('original_price', 8, 2)->nullable();
            $table->decimal('sale_price', 8, 2)->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->integer('quantity')->nullable(); // number of items in the pack
            $table->decimal('discount_percentage', 5, 2)->nullable();
            $table->string('desc')->nullable(); // 'single' or 'pack'
            $table->timestamps();
        });

        Schema::create('product_attributes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->string('key');
            $table->string('value');
            $table->timestamps();
        });

        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->string('image');
            $table->string('desc')->nullable();
            $table->timestamps();
        });

        Schema::create('product_attachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->string('file_name')->nullable();
            $table->string('path')->nullable();
            $table->string('extension')->nullable();
            $table->string('size')->nullable();
            $table->string('desc')->nullable();
            $table->timestamps();
        });

        Schema::create('product_videos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->string('file_name')->nullable();
            $table->string('path')->nullable();
            $table->string('link')->nullable();
            $table->string('desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('product_variants');
        Schema::dropIfExists('product_attributes');
        Schema::dropIfExists('product_images');
        Schema::dropIfExists('product_attachments');
        Schema::dropIfExists('product_videos');
    }
};
