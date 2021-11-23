<?php

namespace Database\Seeders;

use App\Models\Domain;
use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Domain::create([
            'url' => 'bluebells.com',
            'status' => 1
        ]);

        Domain::create([
            'url' => 'twitter.com',
            'status' => 1
        ]);

        Domain::create([
            'url' => 'quora.com',
            'status' => 1
        ]);

    }
}
