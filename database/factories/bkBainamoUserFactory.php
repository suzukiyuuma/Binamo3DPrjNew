<?php
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\BainamoUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class BinamoUserFactory extends Factory
{
    public function definition()
    {
        
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ];
        
    }
}
