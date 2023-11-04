<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SiteContato::class, 100)->create();
    }
}
