<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Epi;

class EpiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Epi::create([
                'nome' => 'Capacete de Segurança aba frontal com carneira',
                'tipo' => 'Proteção para a cabeça',
                'ca' => '31469',
                'fabricante' => 'MSA',
                'quantidade' => 45,
                'validade' => '2028-05-15',
                'status' => 'Disponível',
            ]);
        Epi::create([
                'nome' => 'Óculos de Segurança incolor antifog',
                'tipo' => 'Proteção ocular',
                'ca' => '11264',
                'fabricante' => '3M',
                'quantidade' => 120,
                'validade' => '2027-11-20',
                'status' => 'Disponível',
            ]);
        Epi::create([
                'nome' => 'Protetor Auditivo tipo concha (abafador)',
                'tipo' => 'Proteção auditiva',
                'ca' => '29705',
                'fabricante' => '3M',
                'quantidade' => 8,
                'validade' => '2026-08-10',
                'status' => 'Estoque Baixo',
            ]);
        Epi::create([
                'nome' => 'Respirador PFF2 / N95 sem válvula',
                'tipo' => 'Proteção respiratória',
                'ca' => '38504',
                'fabricante' => 'Delta Plus',
                'quantidade' => 200,
                'validade' => '2029-01-30',
                'status' => 'Disponível',
            ]);
        Epi::create([
                'nome' => 'Luva de Vaqueta cano curto',
                'tipo' => 'Proteção das mãos',
                'ca' => '15280',
                'fabricante' => 'Danny',
                'quantidade' => 35,
                'validade' => '2027-03-12',
                'status' => 'Disponível',
            ]);
        Epi::create([
                'nome' => 'Luva Nitrílica para produtos químicos',
                'tipo' => 'Proteção das mãos',
                'ca' => '25310',
                'fabricante' => 'Ansell',
                'quantidade' => 0,
                'validade' => '2026-12-01',
                'status' => 'Esgotado',
            ]);
        Epi::create([
                'nome' => 'Bota de Segurança de couro com biqueira de aço',
                'tipo' => 'Proteção dos pés',
                'ca' => '28411',
                'fabricante' => 'Marluvas',
                'quantidade' => 18,
                'validade' => '2028-09-18',
                'status' => 'Disponível',
            ]);
        Epi::create([
                'nome' => 'Cinto de Segurança tipo paraquedista com talabarte',
                'tipo' => 'Proteção contra quedas',
                'ca' => '36642',
                'fabricante' => 'Contarget',
                'quantidade' => 12,
                'validade' => '2026-10-05',
                'status' => 'Disponível',
            ]);
        Epi::create([
                'nome' => 'Avental de Raspa de couro para soldador',
                'tipo' => 'Proteção do tronco',
                'ca' => '14809',
                'fabricante' => 'Zanel',
                'quantidade' => 5,
                'validade' => '2027-06-25',
                'status' => 'Estoque Baixo',
            ]);
        Epi::create([
                'nome' => 'Máscara de Solda com escurecimento automático',
                'tipo' => 'Proteção facial/ocular',
                'ca' => '42319',
                'fabricante' => 'Balmer',
                'quantidade' => 3,
                'validade' => '2030-02-14',
                'status' => 'Estoque Baixo',
            ]);
        
    }
}
