<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entrega;
use App\Models\Funcionario;
use App\Models\Epi;

class EntregaSeeder extends Seeder
{
    public function run(): void
    {
        $funcionarios = Funcionario::take(4)->get();
        $epis = Epi::take(4)->get();

        Entrega::create([
            'funcionario_id' => $funcionarios[0]->id,
            'epi_id' => $epis[0]->id,
            'quantidade' => 1,
            'data_entrega' => '2026-09-01',
            'data_devolucao' => null,
            'observacao' => 'Entrega inicial de EPI.',
        ]);

        Entrega::create([
            'funcionario_id' => $funcionarios[1]->id,
            'epi_id' => $epis[1]->id,
            'quantidade' => 2,
            'data_entrega' => '2026-09-02',
            'data_devolucao' => null,
            'observacao' => 'Entrega para atividade operacional.',
        ]);

        Entrega::create([
            'funcionario_id' => $funcionarios[2]->id,
            'epi_id' => $epis[2]->id,
            'quantidade' => 1,
            'data_entrega' => '2026-09-03',
            'data_devolucao' => '2026-09-08',
            'observacao' => 'EPI devolvido após conclusão da atividade.',
        ]);

        Entrega::create([
            'funcionario_id' => $funcionarios[3]->id,
            'epi_id' => $epis[3]->id,
            'quantidade' => 1,
            'data_entrega' => '2026-09-05',
            'data_devolucao' => null,
            'observacao' => 'Entrega para uso durante o expediente.',
        ]);
    }
}