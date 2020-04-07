<?php

namespace App\Http\Controllers;

use App\zodiac;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ZodiacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        
        $date = Carbon::create($r->tgl);

        // echo $date->day.'-'.$date->month;
        // echo '<br>';
        $dd =  $this->zodiac($date->day,$date->month);
        
        $z = zodiac::where('name','=',$dd)->first();
        $zodiac = $z->toArray();
        $request = ['nama'=>$r->nama,'tgl_lahir'=>Carbon::parse($date)->diff(\Carbon\Carbon::now())->format('%y Tahun, %m Bulan and %d Hari')];
        return \view('show',\compact('zodiac','request'));
       
    }
    protected function zodiac($day, $month)
    {
            $zodiac = array('', 'Capricorn', 'Aquarius', 'Pisces', 'Aries', 'Taurus', 'Gemini', 'Cancer', 'Leo', 'Virgo', 'Libra', 'Scorpio', 'Sagitarius', 'Capricorn');
            $last_day = array('', 19, 18, 20, 20, 21, 21, 22, 22, 21, 22, 21, 20, 19);
            return ($day > $last_day[$month]) ? $zodiac[$month + 1] : $zodiac[$month];
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\zodiac  $zodiac
     * @return \Illuminate\Http\Response
     */
    public function show(zodiac $zodiac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\zodiac  $zodiac
     * @return \Illuminate\Http\Response
     */
    public function edit(zodiac $zodiac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\zodiac  $zodiac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, zodiac $zodiac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\zodiac  $zodiac
     * @return \Illuminate\Http\Response
     */
    public function destroy(zodiac $zodiac)
    {
        //
    }
}
