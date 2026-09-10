<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Funcionario;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Funcionario::create([
            'nome' => 'Carlos Eduardo Silva',
            'cpf' => '12345678901',
            'cargo' => 'Técnico de Segurança do Trabalho',
            'setor' => 'SESMT',
            'data_admissao' => '2019-03-10',
            'status' => 'Ativo',
        ]);
        Funcionario::create([
            'nome' => 'Fernanda Oliveira Santos',
            'cpf' => '23456789012',
            'cargo' => 'Soldador',
            'setor' => 'Produção',
            'data_admissao' => '2021-07-22',
            'status' => 'Ativo',
        ]);
        Funcionario::create([
            'nome' => 'João Pedro Almeida',
            'cpf' => '34567890123',
            'cargo' => 'Operador de Máquinas',
            'setor' => 'Produção',
            'data_admissao' => '2018-11-05',
            'status' => 'Ativo',
        ]);
        Funcionario::create([
            'nome' => 'Mariana Costa Ferreira',
            'cpf' => '45678901234',
            'cargo' => 'Almoxarife',
            'setor' => 'Logística',
            'data_admissao' => '2022-01-17',
            'status' => 'Ativo',
        ]);
        Funcionario::create([
            'nome' => 'Ricardo Souza Lima',
            'cpf' => '56789012345',
            'cargo' => 'Eletricista Industrial',
            'setor' => 'Manutenção',
            'data_admissao' => '2020-06-30',
            'status' => 'Afastado',
        ]);
        Funcionario::create([
            'nome' => 'Beatriz Martins Rocha',
            'cpf' => '67890123456',
            'cargo' => 'Analista de RH',
            'setor' => 'Recursos Humanos',
            'data_admissao' => '2023-02-14',
            'status' => 'Ativo',
        ]);
        Funcionario::create([
            'nome' => 'Antonio Carlos Pereira',
            'cpf' => '78901234567',
            'cargo' => 'Supervisor de Produção',
            'setor' => 'Produção',
            'data_admissao' => '2017-09-01',
            'status' => 'Ativo',
        ]);
        Funcionario::create([
            'nome' => 'Juliana Alves Barbosa',
            'cpf' => '89012345678',
            'cargo' => 'Pintor Industrial',
            'setor' => 'Produção',
            'data_admissao' => '2021-12-03',
            'status' => 'Inativo',
        ]);
        Funcionario::create([
            'nome' => 'Paulo Henrique Nunes',
            'cpf' => '90123456789',
            'cargo' => 'Motorista de Empilhadeira',
            'setor' => 'Logística',
            'data_admissao' => '2019-08-25',
            'status' => 'Ativo',
        ]);
        Funcionario::create([
            'nome' => 'Camila Ribeiro Dias',
            'cpf' => '01234567890',
            'cargo' => 'Engenheira de Segurança',
            'setor' => 'SESMT',
            'data_admissao' => '2022-05-09',
            'status' => 'Ativo',
        ]);
    }
}
