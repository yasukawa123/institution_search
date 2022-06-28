<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;   // ← 追記 *

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_id')->constrained()->onDelete('cascade');
            $table->integer('num')->comment('人数');
            $table->integer('price')->comment('金額');
            $table->string('check_in')->comment('チェックイン');
            $table->string('check_out')->comment('チェックアウト');
            $table->boolean('filled_up')->default(false)->comment('空き埋まり状況');
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
        Schema::dropIfExists('shop_plans');
    }
};
