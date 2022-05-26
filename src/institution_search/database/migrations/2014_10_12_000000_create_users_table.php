<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('birthdate')->comment('生年月日');
            $table->string('tel')->comment('電話番号');
            $table->string('zip_code')->comment('郵便番号');
            $table->string('prefecture')->comment('都道府県');
            $table->string('city')->comment('市区町村');
            $table->string('unique_name')->comment('地名番地');
            $table->timestamps();
        });
        DB::table('users')->insert(['id' => 1, 'name' => '山田太郎', 'email' => 'sute1@example.com',
             'password' => bcrypt('password'), 'birthdate' => '2001-4-22', 'tel' => '09011111111', 'zip_code' => '120-0001', 
             'prefecture' => '東京都', 'city' => '千代田区', 'unique_name' => '千代田1-4-2'
            ]);
        DB::table('users')->insert(['id' => 2, 'name' => '開発はなこ', 'email' => 'sute2@example.com',
             'password' => bcrypt('password'), 'birthdate' => '1998-9-2', 'tel' => '09022222222', 'zip_code' => '140-1124', 
             'prefecture' => '愛知県', 'city' => '千代田区', 'unique_name' => '千代田1-4-2'
            ]);
        DB::table('users')->insert(['id' => 3, 'name' => '伊藤英明', 'email' => 'sute3@example.com',
             'password' => bcrypt('password'), 'birthdate' => '1972-4-22', 'tel' => '09022222222', 'zip_code' => '302-2321', 
             'prefecture' => '大阪府', 'city' => '大阪市', 'unique_name' => '大淀北1-44-1'
            ]);           
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
