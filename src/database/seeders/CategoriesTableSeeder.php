<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // これを追加
use Carbon\Carbon; // Carbon が必要な場合

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            ['detail' => '商品のお届けについて', 'created_at' => now(), 'updated_at' => now()],
            ['detail' => '商品の交換について', 'created_at' => now(), 'updated_at' => now()],
            ['detail' => '商品トラブル', 'created_at' => now(), 'updated_at' => now()],
            ['detail' => 'ショップへのお問い合わせ', 'created_at' => now(), 'updated_at' => now()],
            ['detail' => 'その他', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
