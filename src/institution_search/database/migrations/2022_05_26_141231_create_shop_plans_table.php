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
<<<<<<< HEAD
            $table->foreignId('shop_id')->constrained()->onDelete('cascade');
            $table->integer('num')->comment('人数');
=======
            $table->integer('shop_id')->comment('ショップID');
            $table->string('name')->comment('プラン名');
            $table->string('introduction_text')->comment('プラン紹介');
            $table->integer('limit_num')->comment('最大人数');
            $table->integer('limit_num_small')->comment('子供人数');
>>>>>>> feature-make-design_site
            $table->integer('price')->comment('金額');
            $table->string('check_in')->comment('チェックイン');
            $table->string('check_out')->comment('チェックアウト');
            $table->boolean('filled_up')->default(false)->comment('空き埋まり状況');
<<<<<<< HEAD
=======
            $table->string('images01')->comment('画像01');
            $table->string('images02')->comment('画像02');
            $table->string('images03')->comment('画像03');
>>>>>>> feature-make-design_site
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
