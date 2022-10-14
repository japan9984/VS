<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'オムツ替え（おしっこ）',
                'memo' => 'オムツ替え（おしっこ）の詳細',
                'price' => 1
            ],
            [
                'name' => 'オムツ替え（うんち',
                'memo' => 'オムツ替え（うんち）の詳細',
                'price' => 2
            ],
            [
                'name' => 'ミルク',
                'memo' => 'ミルクの詳細',
                'price' => 1
            ],
            [
                'name' => '離乳食',
                'memo' => '離乳食の詳細',
                'price' => 3
            ],
            [
                'name' => '抱っこ(5分以上)',
                'memo' => '抱っこ(5分以上)の詳細',
                'price' => 1
            ],
            [
                'name' => '着替え',
                'memo' => '着替えの詳細',
                'price' => 1
            ],
            [
                'name' => 'お風呂',
                'memo' => 'お風呂の詳細',
                'price' => 2
            ],
            [
                'name' => '歯磨き',
                'memo' => '歯磨きの詳細',
                'price' => 1
            ],
            [
                'name' => '在庫チェック',
                'memo' => '在庫チェックの詳細',
                'price' => 1
            ],
            [
                'name' => '物品購入',
                'memo' => '物品購入の詳細',
                'price' => 1
            ],
            [
                'name' => '夜泣き対応（5分）',
                'memo' => '夜泣き対応（5分）の詳細',
                'price' => 1
            ],
            [
                'name' => 'お出かけ準備',
                'memo' => 'お出かけ準備の詳細',
                'price' => 1
            ],
            [
                'name' => '書類記入',
                'memo' => '書類記入の詳細',
                'price' => 1
            ],
            [
                'name' => '調べ物',
                'memo' => '調べ物の詳細',
                'price' => 1
            ],
            [
                'name' => '遊び（10分以上）',
                'memo' => '遊び（10分以上）の詳細',
                'price' => 1
            ],
            [
                'name' => '爪切り',
                'memo' => '爪切りの詳細',
                'price' =>2
            ],
            [
                'name' => 'スキンケア',
                'memo' => 'スキンケアの詳細',
                'price' => 1
            ],
            [
                'name' => '鼻掃除',
                'memo' => '鼻掃除の詳細',
                'price' => 1
            ],
            [
                'name' => 'お散歩',
                'memo' => 'お散歩の詳細',
                'price' => 2
            ],
            [
                'name' => '受診',
                'memo' => '受診の詳細',
                'price' => 2
            ],
            [
                'name' => '送り迎え',
                'memo' => '送り迎えの詳細',
                'price' => 2
            ],
            [
                'name' => 'イヤイヤ対応',
                'memo' => 'イヤイヤ対応の詳細',
                'price' => 2
            ],
            [
                'name' => '洗濯',
                'memo' => '洗濯の詳細',
                'price' => 2
            ],
            [
                'name' => '皿洗い',
                'memo' => '皿洗いの詳細',
                'price' => 2
            ],
            [
                'name' => 'ゴミ捨て',
                'memo' => 'ゴミ捨ての詳細',
                'price' => 1
            ],
            [
                'name' => 'その他（調整用）',
                'memo' => 'その他（調整用）の詳細',
                'price' => 1
            ],
        ]);
    }
}
