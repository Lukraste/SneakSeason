<?php

use App\Models\Brand;
use App\Models\Color;
use App\Models\Collection;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->unique();
            $table->string('slug', 255)->unique();
            $table->float('price_vat');
            $table->float('be_vat')->default(21);
            $table->string('product_code', 255)->unique();
            $table->enum('gender', ['Femme', 'Homme'])->default('Femme');
            $table->enum('stock', ['Disponible', 'Rupture' ]);
            $table->integer('discount')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('brand_id')->onDelete('cascade');
            $table->foreignId('color_id')->constrained();
            $table->foreignId('collection_id')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
};
