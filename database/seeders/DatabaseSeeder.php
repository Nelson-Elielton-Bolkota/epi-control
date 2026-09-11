<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
{
    $this->call([
        FuncionarioSeeder::class,
        EpiSeeder::class,
        EntregaSeeder::class,
    ]);

    User::factory()->create([
    'name' => 'Administrador',
    'email' => 'admin@epicontrol.com',
    'password' => '12345678',
    'role' => 'admin',
    ]);

    User::factory()->create([
        'name' => 'Gerente',
        'email' => 'gerente@epicontrol.com',
        'password' => '12345678',
        'role' => 'gerente',
    ]);

    User::factory()->create([
        'name' => 'Usuário',
        'email' => 'usuario@epicontrol.com',
        'password' => '12345678',
        'role' => 'usuario',
    ]);
    }
}
