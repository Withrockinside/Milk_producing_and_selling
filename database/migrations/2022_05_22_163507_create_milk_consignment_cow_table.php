<?php

use App\Models\Cow;
use App\Models\MilkConsignment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('milk_consignment_cow', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(MilkConsignment::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Cow::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('milk_consigment_cow');
    }
};
