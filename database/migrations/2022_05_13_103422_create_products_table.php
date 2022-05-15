<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Brand;

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
            $table->float('price_no_VAT');
            $table->float('VAT')->default(21);
            $table->string('product_code', 255)->unique();
            $table->enum('gender', ['Femme', 'Homme'])->default('Femme');
            $table->enum('stock', ['Disponible', 'Rupture', 'Prochainement' ]);
            $table->integer('discount')->nullable();
            $table->text('description')->nullable();
            $table->foreignIdFor(Brand::class);
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
