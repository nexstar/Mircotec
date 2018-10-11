<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools;

class ToolsController extends Controller
{

    public function listall(){
        $Tmp = [];
        $toolss = Tools::ListAll();
        foreach ($toolss as $item) {
            array_push($Tmp, array(
                'id' => $item->id,
                'name' => $item->Name,
                'ip' => $item->Ip
            ));
        }
        return response()->json($Tmp);
    }

}
