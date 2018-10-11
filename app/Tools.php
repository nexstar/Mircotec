<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tools extends Model
{
    protected $table = 'tools';
    protected $fillable = [
        'Name','Ip'
    ];
    public function GetById ($toolId){
        $Tools = Tools::findOrFail($toolId)->limit(1)->get();
        dd($Tools);
        return $Tools;
    }
    public function ListAll(){
        $Toolss = Tools::all();

        $ArrayTools = [];
        foreach ($Toolss as $result){
            array_push($ArrayTools,array(
                    'id' => $result->id,
                    'Name' => $result->Name,
                    'Ip' => $result->Ip,
                )
            );
        };

        return $ArrayTools;
    }
}
