<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                'name' => 'Michael Thompson',
                'email' => 'michael.thompson@yahoo.com',
                'number' => '1234567890',
                'profession' => 'Software Engineer',
                'review' => 'I had an excellent experience with this service. The team was professional and efficient, ensuring that all my requirements were met with precision. Highly recommended!',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Emily Williams',
                'email' => 'emily.williams@gmail.com',
                'number' => '0987654321',
                'profession' => 'Graphic Designer',
                'review' => 'The quality of work provided was outstanding. The attention to detail and the level of creativity exceeded my expectations. I will definitely use their services again in the future.',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sophia Johnson',
                'email' => 'sophia.johnson@gmail.com',
                'number' => '1122334455',
                'profession' => 'Teacher',
                'review' => 'I was very pleased with the service I received. The staff was courteous and attentive, and they went above and beyond to ensure my satisfaction. Great job!',
                'status' => 'rejected',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'James Brown',
                'email' => 'olawale@gmail.com',
                'number' => '4455667788',
                'profession' => 'Marketing Specialist',
                'review' => 'From start to finish, the experience was seamless. The team was knowledgeable and responsive, and they delivered exceptional results. I would highly recommend their services to anyone in need of top-notch quality.',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Olivia Davis',
                'email' => 'seun@gmail.com',
                'number' => '5566778899',
                'profession' => 'Project Manager',
                'review' => 'This service exceeded all my expectations. The team was highly skilled and dedicated to providing the best possible outcome. I am thoroughly impressed and will definitely be a returning customer.',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
