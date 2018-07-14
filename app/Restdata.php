<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restdata extends Model
{
    protected $table = "restdata";
    protected $guarded = array("id");

    protected static $rules = array(
        "message" => "required",
        "url" => "required",
    );

    protected function getData() {
        return $this->id.":".$this->message."(".$this->url.")";
    }
}
