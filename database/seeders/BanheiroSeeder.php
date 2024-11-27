<?php

namespace Database\Seeders;

use App\Models\Banheiro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanheiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $totalRecords = 20;
        for ($i = 0; $i < $totalRecords; $i++) {
            // DB::table('banheiro')->insert([
            //     'name' => fake()->name, // Nome aleatório
            //     'description' => fake()->text(200), // Descrição aleatória com até 200 caracteres
            //     'created_at' => now(), // Data atual
            //     'updated_at' => now(),
            // ]);
            Banheiro::create([
                'name' => fake()->country,
                'description' => fake()->sentence(200),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
