<?php

use Illuminate\Database\Seeder;
use App\Zodiac;
class ZodiacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'start_date'=>'21-March',
                'end_date'=>'19-April',
                'name'=>'Aries'
            ],
            [
                'start_date'=>'20-April',
                'end_date'=>'20-May',
                'name'=>'Taurus'
            ],
            [
                'start_date'=>'21-May',
                'end_date'=>'20-June',
                'name'=>'Gemini'
            ],
            [
                'start_date'=>'21-Juni',
                'end_date'=>'22-July',
                'name'=>'Cancer'
            ],
            [
                'start_date'=>'23-July',
                'end_date'=>'22-Agustus',
                'name'=>'Leo'
            ],
            [
                'start_date'=>'23-Agustus',
                'end_date'=>'22-September',
                'name'=>'Virgo'
            ],
            [
                'start_date'=>'23-September',
                'end_date'=>'22-Oktober',
                'name'=>'Libra'
            ],
            [
                'start_date'=>'23-Oktober',
                'end_date'=>'21-November',
                'name'=>'Scorpio'
            ],
            [
                'start_date'=>'22-November',
                'end_date'=>'21-December',
                'name'=>'Sagitarius'
            ],
            [
                'start_date'=>'22-December',
                'end_date'=>'19-January',
                'name'=>'Capricorn'
            ],
            [
                'start_date'=>'20-January',
                'end_date'=>'18-February',
                'name'=>'Aquarius'
            ],
            [
                'start_date'=>'19-February',
                'end_date'=>'20-March',
                'name'=>'Pisces'
            ],
            
        ];
        Zodiac::insert($data);
    }
}
