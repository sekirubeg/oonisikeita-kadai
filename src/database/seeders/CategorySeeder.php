<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // これを追加
use Carbon\Carbon; // Carbon が必要な場合

class CategorySeeder extends Seeder
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
            ['detail' => '商品について', 'created_at' => now(), 'updated_at' => now()],
            ['detail' => '配送について', 'created_at' => now(), 'updated_at' => now()],
            ['detail' => 'キャンセル・返品について', 'created_at' => now(), 'updated_at' => now()],
            ['detail' => 'その他', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
