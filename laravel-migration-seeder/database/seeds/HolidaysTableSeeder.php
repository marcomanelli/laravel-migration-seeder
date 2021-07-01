<?php
use App\Holiday;
use Illuminate\Database\Seeder;
use League\CommonMark\Reference\Reference;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $new_holiday = new Holiday();
        $new_holiday->Price = 1000;
        $new_holiday->Rooms = 4;
        $new_holiday->Destination = "Fuerte Ventura";
        $new_holiday->save();
    }

}
