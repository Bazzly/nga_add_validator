<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_code' => 'NGN',
                'name' => 'Abia',
                'city' => 'Umuahia',
                'state_code' => 'AB',
                'latitude' => '7.48600249',
                'longitude' => '5.53200304',
                'area_cover' => '',
                'postcode' => '440001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'country_code' => 'NGN',
                'name' => 'Adamawa',
                'city' => 'Yola',
                'state_code' => 'AD',
                'latitude' => '13.2700321',
                'longitude' => '10.2703408',
                'area_cover' => '',
                'postcode' => '640001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'country_code' => 'NGN',
                'name' => 'Akwa Ibom',
                'city' => 'Uyo',
                'state_code' => 'AK',
                'latitude' => '7.84999852',
                'longitude' => '5.00799606',
                'area_cover' => '',
                'postcode' => '520001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'country_code' => 'NGN',
                'name' => 'Anambra',
                'city' => 'Awka',
                'state_code' => 'AN',
                'latitude' => '7.06999711',
                'longitude' => '6.21043357',
                'area_cover' => '',
                'postcode' => '420001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'country_code' => 'NGN',
                'name' => 'Bauchi',
                'city' => 'Bauchi',
                'state_code' => 'BA',
                'latitude' => '10.19001339',
                'longitude' => '11.68040977',
                'area_cover' => '',
                'postcode' => '740001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'country_code' => 'NGN',
                'name' => 'Bayelsa',
                'city' => 'Yenagoa',
                'state_code' => 'BY',
                'latitude' => '6.036987',
                'longitude' => '4.66403',
                'area_cover' => '',
                'postcode' => '561001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'country_code' => 'NGN',
                'name' => 'Benue',
                'city' => 'Makurdi',
                'state_code' => 'BE',
                'latitude' => '8.12998409',
                'longitude' => '7.1903996',
                'area_cover' => '',
                'postcode' => '970001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'country_code' => 'NGN',
                'name' => 'Borno',
                'city' => 'Maiduguri',
                'state_code' => 'BO',
                'latitude' => '12.18999467',
                'longitude' => '10.62042279',
                'area_cover' => '',
                'postcode' => '600001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'country_code' => 'NGN',
                'name' => 'Cross River',
                'city' => 'Calabar',
                'state_code' => 'CR',
                'latitude' => '8.33002356',
                'longitude' => '4.96040651',
                'area_cover' => '',
                'postcode' => '540001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'country_code' => 'NGN',
                'name' => 'Delta',
                'city' => 'Asaba',
                'state_code' => 'DE',
                'latitude' => '5.68000443',
                'longitude' => '5.89042727',
                'area_cover' => '',
                'postcode' => '320001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'country_code' => 'NGN',
                'name' => 'Ebonyi',
                'city' => 'Abakaliki',
                'state_code' => 'EB',
                'latitude' => '8.11368',
                'longitude' => '6.32485',
                'area_cover' => '',
                'postcode' => '840001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'country_code' => 'NGN',
                'name' => 'Edo',
                'city' => 'Benin',
                'state_code' => 'ED',
                'latitude' => '5.6200081',
                'longitude' => '6.34047731',
                'area_cover' => '',
                'postcode' => '300001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'country_code' => 'NGN',
                'name' => 'Ekiti',
                'city' => 'Ado Ekiti',
                'state_code' => 'EK',
                'latitude' => '5.21998083',
                'longitude' => '7.63037274',
                'area_cover' => '',
                'postcode' => '360001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'country_code' => 'NGN',
                'name' => 'Enugu',
                'city' => 'Enugu',
                'state_code' => 'EN',
                'latitude' => '3.35001746',
                'longitude' => '7.16042727',
                'area_cover' => '',
                'postcode' => '400001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'country_code' => 'NGN',
                'name' => 'Federal Capital Territory',
                'city' => 'Abuja',
                'state_code' => 'FC',
                'latitude' => '5.19998205',
                'longitude' => '7.25039593',
                'area_cover' => '',
                'postcode' => '900001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'country_code' => 'NGN',
                'name' => 'Gombe',
                'city' => 'Gombe',
                'state_code' => 'GO',
                'latitude' => '4.17999263',
                'longitude' => '7.62995933',
                'area_cover' => '',
                'postcode' => '760001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'country_code' => 'NGN',
                'name' => 'Imo',
                'city' => 'Owerri',
                'state_code' => 'IM',
                'latitude' => '3.59000281',
                'longitude' => '7.97001609',
                'area_cover' => '',
                'postcode' => '460001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'country_code' => 'NGN',
                'name' => 'Jigawa',
                'city' => 'Dutse',
                'state_code' => 'JI',
                'latitude' => '7.383363',
                'longitude' => '6.86703432',
                'area_cover' => '',
                'postcode' => '720001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'country_code' => 'NGN',
                'name' => 'Kaduna',
                'city' => 'Kaduna',
                'state_code' => 'KD',
                'latitude' => '7.533328',
                'longitude' => '9.08333315',
                'area_cover' => '',
                'postcode' => '700001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'country_code' => 'NGN',
                'name' => 'Kano',
                'city' => 'Kano',
                'state_code' => 'KN',
                'latitude' => '11.16995357',
                'longitude' => '10.29044293',
                'area_cover' => '',
                'postcode' => '800001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'country_code' => 'NGN',
                'name' => 'Katsina',
                'city' => 'Katsina',
                'state_code' => 'KT',
                'latitude' => '7.02600359',
                'longitude' => '5.49299705',
                'area_cover' => '',
                'postcode' => '820001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'country_code' => 'NGN',
                'name' => 'Kebbi',
                'city' => 'Birnin Kebbi',
                'state_code' => 'KE',
                'latitude' => '9.35033461',
                'longitude' => '11.7991891',
                'area_cover' => '',
                'postcode' => '860001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'country_code' => 'NGN',
                'name' => 'Kogi',
                'city' => 'Lokoja',
                'state_code' => 'KO',
                'latitude' => '7.71000972',
                'longitude' => '11.0799813',
                'area_cover' => '',
                'postcode' => '260001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'country_code' => 'NGN',
                'name' => 'Kwara',
                'city' => 'Ilorin',
                'state_code' => 'KW',
                'latitude' => '8.5200378',
                'longitude' => '11.99997683',
                'area_cover' => '',
                'postcode' => '240001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'country_code' => 'NGN',
                'name' => 'Lagos',
                'city' => 'Ikeja',
                'state_code' => 'LA',
                'latitude' => '7.32000769',
                'longitude' => '11.5203937',
                'area_cover' => '',
                'postcode' => '100001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'country_code' => 'NGN',
                'name' => 'Nasarawa',
                'city' => 'Lafia',
                'state_code' => 'NA',
                'latitude' => '4.19993974',
                'longitude' => '12.45041445',
                'area_cover' => '',
                'postcode' => '962001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'country_code' => 'NGN',
                'name' => 'Niger',
                'city' => 'Minna',
                'state_code' => 'NI',
                'latitude' => '6.73993974',
                'longitude' => '7.8003882',
                'area_cover' => '',
                'postcode' => '920001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'country_code' => 'NGN',
                'name' => 'Ogun',
                'city' => 'Abeokuta',
                'state_code' => 'OG',
                'latitude' => '4.54999589',
                'longitude' => '8.49001019',
                'area_cover' => '',
                'postcode' => '110001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'country_code' => 'NGN',
                'name' => 'Ondo',
                'city' => 'Akure',
                'state_code' => 'ON',
                'latitude' => '3.39153107',
                'longitude' => '6.44326165',
                'area_cover' => '',
                'postcode' => '340001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'country_code' => 'NGN',
                'name' => 'Osun',
                'city' => 'Oshogbo',
                'state_code' => 'OS',
                'latitude' => '8.5200378',
                'longitude' => '8.4904236',
                'area_cover' => '',
                'postcode' => '230001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'country_code' => 'NGN',
                'name' => 'Oyo',
                'city' => 'Ibadan',
                'state_code' => 'OY',
                'latitude' => '5.46993974',
                'longitude' => '10.4003587',
                'area_cover' => '',
                'postcode' => '200001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'country_code' => 'NGN',
                'name' => 'Plateau',
                'city' => 'Jos',
                'state_code' => 'PL',
                'latitude' => '8.89004106',
                'longitude' => '9.92997398',
                'area_cover' => '',
                'postcode' => '930001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'country_code' => 'NGN',
                'name' => 'River',
                'city' => 'Port Harcourt',
                'state_code' => 'RI',
                'latitude' => '7.01000077',
                'longitude' => '4.81000226',
                'area_cover' => '',
                'postcode' => '500001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'country_code' => 'NGN',
                'name' => 'Sokoto',
                'city' => 'Sokoto',
                'state_code' => 'SO',
                'latitude' => '5.24003129',
                'longitude' => '13.06001548',
                'area_cover' => '',
                'postcode' => '840001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'country_code' => 'NGN',
                'name' => 'Taraba',
                'city' => 'Jalingo',
                'state_code' => 'TA',
                'latitude' => '9.78001257',
                'longitude' => '7.87040977',
                'area_cover' => '',
                'postcode' => '660001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'country_code' => 'NGN',
                'name' => 'Yobe',
                'city' => 'Damaturu',
                'state_code' => 'YO',
                'latitude' => '11.96600457',
                'longitude' => '11.74899608',
                'area_cover' => '',
                'postcode' => '320001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'country_code' => 'NGN',
                'name' => 'Zamfara',
                'city' => 'Zamfara',
                'state_code' => 'ZA',
                'latitude' => '6.6599963',
                'longitude' => '12.1704057',
                'area_cover' => '',
                'postcode' => '860001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}