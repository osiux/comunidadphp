<?php

use App\Models\Country;
use Illuminate\Database\Seeder;

class PopulateCountriesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if ( Country::count() == 0 ) {
            // Uses json data from http://country.io/names.json
            $file = database_path('seeds/data/countries.json');

            $json = json_decode(file_get_contents($file));

            foreach ($json as $code => $name) {
                Country::create([
                    'name'  =>  $name,
                    'code'  =>  strtolower($code),
                ]);
            }
        }
    }
}
