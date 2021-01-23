<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Version;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $games = [
            [
                'name' => 'Call of Duty',
                'year'  => Carbon::create(2015, 1, 1, 12),
                'versions' => [
                    // ['name' => 'Black Ops', 'year' => '2010'],
                    // ['name' => 'Modern Warfare 3', 'year' => '2011'],
                    // ['name' => 'Black Ops II', 'year' => '2012'],
                    // ['name' => 'Ghosts', 'year' => '2013'],
                    // ['name' => 'Advanced Warfare', 'year' => '2014'],
                    ['name' => 'Black Ops III', 'year' => '2015'],
                    ['name' => ' Modern Warfare Remastered', 'year' => '2016'],
                    ['name' => ' Infinite Warfare', 'year' => '2017'],
                    ['name' => 'WWII', 'year' => '2018'],
                    ['name' => 'Black Ops 4', 'year' => '2019'],
                    ['name' => 'Modern Warfare', 'year' => '2020'],
                ]
            ],
            [
                'name' => 'Mortal Kombat',
                'year'  => Carbon::create(2015, 1, 1, 12),
                'versions' => [
                    // ['name' => 'Advance', 'year' => '2010'],
                    // ['name' => 'Deadly Alliance', 'year' => '2011'],
                    // ['name' => 'Tournament Edition', 'year' => '2012'],
                    // ['name' => 'Deception', 'year' => '2013'],
                    // ['name' => 'Shaolin Monks', 'year' => '2014'],
                    ['name' => 'Armageddon', 'year' => '2015'],
                    ['name' => 'Unchained', 'year' => '2016'],
                    ['name' => ' Ultimate', 'year' => '2017'],
                    ['name' => 'DC Universe', 'year' => '2018'],
                    ['name' => 'Arcade Kollection', 'year' => '2019'],
                    ['name' => 'Kombat X', 'year' => '2020'],
                ]
            ],
            [
                'name' => 'FIFA',
                'year'  => Carbon::create(2015, 1, 1, 12),
                'versions' => [
                    // ['name' => 'FIFA 10', 'year' => '2010'],
                    // ['name' => 'FIFA 11', 'year' => '2011'],
                    // ['name' => 'FIFA 12', 'year' => '2012'],
                    // ['name' => 'FIFA 13', 'year' => '2013'],
                    // ['name' => 'FIFA 14', 'year' => '2014'],
                    ['name' => 'FIFA 15', 'year' => '2015'],
                    ['name' => 'FIFA 16', 'year' => '2016'],
                    ['name' => 'FIFA 17', 'year' => '2017'],
                    ['name' => 'FIFA 18', 'year' => '2018'],
                    ['name' => 'FIFA 19', 'year' => '2019'],
                    ['name' => 'FIFA 20', 'year' => '2020'],
                ]
            ],
            [
                'name' => 'Just Cause',
                'year'  => Carbon::create(2016, 1, 1, 12),
                'versions' => [
                    ['name' => 'Just Cause 1', 'year' => '2016'],
                    ['name' => 'Just Cause 2', 'year' => '2017'],
                    ['name' => 'Just Cause 3', 'year' => '2018'],
                    ['name' => 'Just Cause 4', 'year' => '2019'],
                    ['name' => 'Just Cause 5', 'year' => '2020'],
                ]
            ],
            [
                'name' => 'Apex Legend',
                'year'  => Carbon::create(2014, 1, 1, 12),
                'versions' => [
                    ['name' => 'Wild Frontier', 'year' => '2014'],
                    ['name' => 'Battle Charge', 'year' => '2015'],
                    ['name' => 'Meltdown', 'year' => '2016'],
                    ['name' => 'Assimilation', 'year' => '2017'],
                    ['name' => 'Fortune\'s Favour', 'year' => '2018'],
                    ['name' => 'Boosted', 'year' => '2019'],
                    ['name' => 'Ascension', 'year' => '2020'],
                ]
            ],
        ];

        foreach ($games as $game) {
             $gameId = Game::create(['name' => $game['name'], 'created_at' =>$game['year'],]);
            foreach ($game['versions'] as $version) {
                Version::create([
                    'game_id' => $gameId->id,
                    'version' => $version['name'],
                    'year'  => $version['year'],
                    'created_at'   =>  Carbon::create($version['year'], 1, 1, 12)->addDay(),
                ]);
            }
        }
    }
}
