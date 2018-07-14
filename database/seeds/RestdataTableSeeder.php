<?php

use Illuminate\Database\Seeder;
use App\Restdata;

class RestdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "message" => "Google Japan",
            "url" => "google.co.jp",
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();

        $param = [
            "message" => "Yahoo Japan",
            "url" => "yahoo.co.jp",
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();

        $param = [
            "message" => "MSN Japan",
            "url" => "msn.com/ja-jp"
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();
    }
}
