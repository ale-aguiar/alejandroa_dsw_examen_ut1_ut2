<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $messages = [
            [
                "text" => "Ya puedes hacer el examen",
                "negrita" => true,
                "subrayado" => false,
            ],
            [
                "text" => "Suerte!",
                "negrita" => false,
                "subrayado" => true,
            ],
        ];

        foreach ($messages as $message) {
            Message::create($message);
        }
    }
}
