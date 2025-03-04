<?php

namespace Database\Seeders;

use App\Models\Notification;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    public function run(): void
    {
        Notification::create([
            'title' => 'Une nouvelle facture est disponible',
        ]);

        Notification::create([
            'title' => 'Anomalie détectée dans la consommation énergétique',
        ]);

        Notification::create([
            'title' => 'Maintenance planifiée des systèmes de tarification',
        ]);
    }
}
