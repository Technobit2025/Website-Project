<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Webpatser\Countries\CountriesFacade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Empty the countries table
        DB::table('countries')->delete();
        $countries = CountriesFacade::getList();
        foreach ($countries as $countryId => $country){
            DB::table('countries')->insert(array(
                'id' => $countryId,
                'name' => $country['name'],
                'currency' => ((isset($country['currency'])) ? $country['currency'] : null),
                'currency_symbol' => ((isset($country['currency_symbol'])) ? $country['currency_symbol'] : null),
                'currency_code' => ((isset($country['currency_code'])) ? $country['currency_code'] : null),
                'iso_3166_2' => $country['iso_3166_2'],
                'iso_3166_3' => $country['iso_3166_3'],
                'calling_code' => $country['calling_code'],
                'flag' =>((isset($country['flag'])) ? $country['flag'] : null),
            ));
        }
    }
}
