<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foods = [
            [
                'name' => 'Nho xanh',
                'image' => '/trainho.jpg',
                'category' => 'Hoa quả',
                'price' => 12000,
                'old_price' => 15000,
                'description' => 'Nho xanh tươi ngon, chua chua ngọt ngọt.',
                'sodium' => '5mg',
                'fiber' => '1g',
                'vitamin_c' => '4mg'
            ],
            [
                'name' => 'Mùng tơi',
                'image' => '/mungtoi_large.jpg',
                'category' => 'Thực phẩm khô',
                'price' => 12000,
                'old_price' => 15000,
                'description' => 'Rau cải bắp hữu cơ (Brassica oleracea nhóm Capitata) là loại rau chủ lực trong họ Cải...',
                'sodium' => '10mg',
                'fiber' => '2g',
                'vitamin_c' => '17mg'
            ],
            [
                'name' => 'Dứa',
                'image' => '/dua.jpg',
                'category' => 'Rau hữu cơ',
                'price' => 12000,
                'old_price' => 15000,
                'description' => 'Dứa thơm ngọt, giải nhiệt mùa hè cực đã.',
                'sodium' => '2mg',
                'fiber' => '1.4g',
                'vitamin_c' => '47mg'
            ],
            [
                'name' => 'Củ dền',
                'image' => '/hat_giong_cu_den_.jpg',
                'category' => 'Sản phẩm nổi bật',
                'price' => 12000,
                'old_price' => 15000,
                'description' => 'Củ dền đỏ bổ máu, thích hợp làm nước ép.',
                'sodium' => '78mg',
                'fiber' => '2.8g',
                'vitamin_c' => '4.9mg'
            ],
            [
                'name' => 'Cà chua',
                'image' => '/cachua.jpg',
                'category' => 'Hoa quả',
                'price' => 12000,
                'old_price' => 15000,
                'description' => 'Cà chua Đà Lạt mọng nước tươi đỏ.',
                'sodium' => '5mg',
                'fiber' => '1.2g',
                'vitamin_c' => '14mg'
            ],
            [
                'name' => 'Cam',
                'image' => '/cam.jpg',
                'category' => 'Hoa quả',
                'price' => 20000,
                'old_price' => 25000,
                'description' => 'Cam sành vắt nước, trị ho giải cảm.',
                'sodium' => '0mg',
                'fiber' => '2.4g',
                'vitamin_c' => '53mg'
            ],
            [
                'name' => 'Quả bơ',
                'image' => '/Quabo.jpg',
                'category' => 'Thực phẩm hữu cơ',
                'price' => 35000,
                'old_price' => 40000,
                'description' => 'Bơ sáp béo ngậy, giàu dinh dưỡng dẻo thơm.',
                'sodium' => '7mg',
                'fiber' => '7g',
                'vitamin_c' => '10mg'
            ],
            [
                'name' => 'Quả bí',
                'image' => '/quabi.jpg',
                'category' => 'Thực phẩm khô',
                'price' => 15000,
                'old_price' => 18000,
                'description' => 'Bí già thơm dẻo, bảo quản siêu lâu.',
                'sodium' => '1mg',
                'fiber' => '1g',
                'vitamin_c' => '9mg'
            ],
        ];

        foreach ($foods as $food) {
            \App\Models\Food::create($food);
        }
    }
}
