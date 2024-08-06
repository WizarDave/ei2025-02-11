<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
         $user = User::first() ?? User::factory()->create();

         $user->teams()->save(Team::factory()->create([
             'user_id' => $user->id,
         ]));
    }
}
