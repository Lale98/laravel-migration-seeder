<?php

use Illuminate\Database\Seeder;
use App\Vacation;

class VacationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayVacation = config('vacations');

        foreach ($arrayVacation as $item) {
            
            $vacation = new Vacation();

            $vacation->destinazione = $item["destinazione"];
            $vacation->alloggio = $item["alloggio"];
            $vacation->indirizzo = $item["indirizzo"];
            $vacation->pernottamento = $item["pernottamento"];
            $vacation->info = $item["info"];
            $vacation->servizi = $item["servizi"];
            $vacation->prezzo = $item["prezzo"];

            $vacation->save();
        }
    }
}
