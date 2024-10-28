<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Valor;


class valoresBoolean extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $valores = [
            [
                "valor" => true,
            ],
            [
                "valor" => false,
            ],
        ];

        foreach ($valores as $valor) {
            Valor::create($valor);
        }
    }
}
