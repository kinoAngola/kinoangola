<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subscricao;

class SubscricaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subscricao::create([
            'nome' => 'Grátis',
            'descricao' => 'Plano gratuito com recursos limitados. Aparece em buscas, mas sem destaque.',
            'valor' => 0,
            'destaque' => false,
        ]);

        Subscricao::create([
            'nome' => 'Premium',
            'descricao' => 'Plano intermediário. Maior visibilidade e prioridade nas listagens locais.',
            'valor' => 10000, // Exemplo: valor em Kwanzas
            'destaque' => true,
        ]);

        Subscricao::create([
            'nome' => 'Destaque Total',
            'descricao' => 'Máxima exposição. Aparece sempre no topo com selo de destaque.',
            'valor' => 25000,
            'destaque' => true,
        ]);
    }
}
