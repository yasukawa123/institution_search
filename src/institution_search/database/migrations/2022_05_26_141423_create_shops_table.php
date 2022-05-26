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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_plan_id')->constrained()->onDelete('cascade');
            $table->string('name')->comment('店名');
            $table->string('email')->unique('メールアドレス');
            $table->string('tel')->comment('電話番号');
            $table->string('manager')->comment('担当者');
            $table->string('zip_code_jp')->comment('郵便番号');
            $table->string('prefecture')->comment('都道府県');
            $table->string('city')->comment('市区町村');
            $table->string('unique_name')->comment('地名番地');
            $table->string('images')->comment('画像');
            $table->string('introduction_text')->comment('紹介テキスト');
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
        Schema::dropIfExists('shops');
    }
};
