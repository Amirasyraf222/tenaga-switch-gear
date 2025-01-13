<?php

use Illuminate\Database\Seeder;
use App\Models\Manufacture;
use App\Models\Car;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create sample manufacturers
        $manufactures = [
            ['name' => 'Proton'],
            ['name' => 'Honda'],
            ['name' => 'Toyota']
        ];

        foreach ($manufactures as $manufacture) {
            Manufacture::create($manufacture);
        }

        // Create sample cars
        $cars = [
            ['name' => 'S70', 'manufacture_id' => 1, 'date_created' => now()],
            ['name' => 'Civic', 'manufacture_id' => 2, 'date_created' => now()->addDays(10)],
            ['name' => 'Altis', 'manufacture_id' => 3, 'date_created' => now()->addDays(20)],
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
