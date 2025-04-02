<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog; //ใช้ Model Blog

//เอาไว้นำ FACTORY มาใช้

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // เรียนใช้ Factory สร้างข้อมูล จำนวน 10 บทความ
        Blog::factory()->count(10)->create();
    }
}
