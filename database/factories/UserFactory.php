<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition()
    {
        // 用户的默认头像
        $avatars = [
            'http://localhost:8000/uploads/images/avatars/5927687_01.jpg',
            'http://localhost:8000/uploads/images/avatars/5927687_02.jpg',
            'http://localhost:8000/uploads/images/avatars/5927687_03.jpg',
            'http://localhost:8000/uploads/images/avatars/5927687_04.jpg',
            'http://localhost:8000/uploads/images/avatars/5927687_05.jpg',
            'http://localhost:8000/uploads/images/avatars/5927687_06.jpg',
            'http://localhost:8000/uploads/images/avatars/5927687_07.jpg',
            'http://localhost:8000/uploads/images/avatars/5927687_08.jpg',
            'http://localhost:8000/uploads/images/avatars/5927687_09.jpg',
        ];

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'introduction' => $this->faker->sentence(),
            'avatar' => $this->faker->randomElement($avatars),
        ];
    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
