<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Mobile Phone', 'description' => 'A powerful smartphone with 6GB of RAM and a 128GB storage', 'stock' => 64, 'measurement_unit_id' => 1],
            ['name' => 'Laptop', 'description' => 'A sleek and powerful laptop with a 15.6" Full HD display and 8GB of RAM', 'stock' => 23, 'measurement_unit_id' => 1],
            ['name' => 'Bluetooth Speaker', 'description' => 'A portable speaker with 360-degree sound and 10-hour battery life', 'stock' => 15, 'measurement_unit_id' => 1],
            ['name' => 'Wireless Mouse', 'description' => 'A comfortable and responsive mouse with 1600 DPI and 6 buttons', 'stock' => 79, 'measurement_unit_id' => 1],
            ['name' => 'External Hard Drive', 'description' => 'A high-capacity external hard drive with USB 3.0 and 7200 RPM', 'stock' => 42, 'measurement_unit_id' => 1],
            ['name' => 'Gaming Headset', 'description' => 'A premium gaming headset with 7.1 surround sound and noise-canceling mic', 'stock' => 8, 'measurement_unit_id' => 1],
            ['name' => 'Smart Watch', 'description' => 'A stylish and versatile smartwatch with heart rate monitor and GPS', 'stock' => 31, 'measurement_unit_id' => 1],
            ['name' => 'Wi-Fi Router', 'description' => 'A high-speed router with 4 antennas and advanced security features', 'stock' => 12, 'measurement_unit_id' => 1],
            ['name' => 'Graphics Card', 'description' => 'A powerful graphics card with 8GB of VRAM and 256-bit memory interface', 'stock' => 4, 'measurement_unit_id' => 1],
            ['name' => 'Wireless Keyboard', 'description' => 'A slim and ergonomic keyboard with backlit keys and multimedia shortcuts', 'stock' => 57, 'measurement_unit_id' => 1],
            ['name' => 'Portable Charger', 'description' => 'A compact and fast-charging power bank with 10000mAh capacity', 'stock' => 22, 'measurement_unit_id' => 1],
            ['name' => 'USB Flash Drive', 'description' => 'A reliable and high-speed USB drive with 64GB of storage', 'stock' => 51, 'measurement_unit_id' => 1],
            ['name' => 'Wireless Earbuds', 'description' => 'A comfortable and sweatproof earbuds with noise reduction and voice assistant', 'stock' => 18, 'measurement_unit_id' => 1],
            ['name' => 'Webcam', 'description' => 'A high-quality webcam with 1080p resolution and built-in microphone', 'stock' => 27, 'measurement_unit_id' => 1],
            ['name' => 'Smartphone', 'description' => 'A powerful smartphone with 6GB of RAM and a 128GB storage', 'stock' => 50, 'measurement_unit_id' => 1],
            ['name' => 'Tablet', 'description' => 'A portable tablet with a 10.5" screen and 256GB of storage', 'stock' => 60, 'measurement_unit_id' => 1],
            ['name' => 'Smart TV', 'description' => 'A 4K UHD smart TV with HDR and 55" screen', 'stock' => 40, 'measurement_unit_id' => 1],
            ['name' => 'Gaming Mouse', 'description' => 'A high-precision gaming mouse with 12000 DPI and 8 programmable buttons', 'stock' => 80, 'measurement_unit_id' => 1],
            ['name' => 'Wireless Headphones', 'description' => 'Premium wireless headphones with active noise cancellation and 30-hour battery life', 'stock' => 70, 'measurement_unit_id' => 1],
            ['name' => 'Smart Speaker', 'description' => 'A smart speaker with Alexa built-in and 360-degree sound', 'stock' => 90, 'measurement_unit_id' => 1],
            ['name' => 'Gaming Keyboard', 'description' => 'A mechanical gaming keyboard with RGB lighting and anti-ghosting keys', 'stock' => 75, 'measurement_unit_id' => 1],
            ['name' => 'Drone', 'description' => 'A quadcopter drone with 4K camera and 30 minutes of flight time', 'stock' => 20, 'measurement_unit_id' => 1],
            ['name' => 'Wireless Charger', 'description' => 'A fast wireless charger with 15W output and compatibility with most smartphones', 'stock' => 65, 'measurement_unit_id' => 1],
            ['name' => 'Smart Thermostat', 'description' => 'A programmable smart thermostat with Wi-Fi and energy-saving features', 'stock' => 85, 'measurement_unit_id' => 1],
            ['name' => 'Wireless Security Camera', 'description' => 'A wireless security camera with 1080p resolution and night vision', 'stock' => 35, 'measurement_unit_id' => 1],
            ['name' => 'Smart Lock', 'description' => 'A smart lock with keypad and keyless entry via smartphone', 'stock' => 55, 'measurement_unit_id' => 1]
        ]);
    }
}
