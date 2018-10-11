<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tools;
use App\Recipe;
use App\AlarmCode;

class Statuses extends Model
{
    protected $table = 'statuses';

    private static $enum = array(
        0 => "Running", 1 => "Stop", 2 => "Alarm"
    );

    protected $fillable = [
        'recipe_id','Quantity','CreateTime','State','WorkThickness',
        'SnapOff','PrintTimes','LowSpeedDownHeight','LowSpeedDownSpeed','SQStrokeDelay',
        'SQUpDelay','TableDownDelay','CleaningTimes','ChucksTimes','ScreenSize',
        'SQStartPosition','SQEndPosition','FBStartPosition','FBEndPosition','SQStrokeSpeed',
        'FBStrokeSpeed','SQDownPressure','FBDownPressure','SQFBUpPressure','Screenid',
        'Inkid','AlignmentPatternNumber','AlignmentPatternName','ModifyTime','tool_id',
        'Alarm'
    ];

    public function toOrdinal($name) {
        return array_search($name, self::$enum);
    }

    public function toString($ordinal) {
        return self::$enum[$ordinal];
    }

    private function ListAllGroupByToolId(){
        $Statuses = Statuses::orderBy('State','desc')->orderBy('CreateTime','desc')->get();

        $ArrayStatuse = [];
        foreach ($Statuses as $result){
            array_push($ArrayStatuse,array(
                    "Alarm" => $result->Alarm,
                    "AlarmDescription" => "",
                    "AlignmentPatternName" => $result->AlignmentPatternName,
                    "AlignmentPatternNumber" => (float) $result->AlignmentPatternNumber,
                    "id" => $result->id,
                    "recipe_id" => $result->recipe_id,
                    "RecipeName" => "",
                    "Quantity" => $result->Quantity,
                    "CreateTime" => $result->CreateTime,
                    "State" => $result->State,
                    "StateDescription" => "",
                    "WorkThickness" => (float) $result->WorkThickness,
                    "SnapOff" => (float) $result->SnapOff,
                    "PrintTimes" => (float) $result->PrintTimes,
                    "LowSpeedDownHeight" => (float) $result->LowSpeedDownHeight,
                    "LowSpeedDownSpeed" => (float) $result->LowSpeedDownSpeed,
                    "SQStrokeDelay" => (float) $result->SQStrokeDelay,
                    "SQUpDelay" => (float) $result->SQUpDelay,
                    "TableDownDelay" => (float) $result->TableDownDelay,
                    "CleaningTimes" => (float) $result->CleaningTimes,
                    "ChucksTimes" => (float) $result->ChucksTimes,
                    "ScreenSize" => (float) $result->ScreenSize,
                    "SQStartPosition" => (float) $result->SQStartPosition,
                    "SQEndPosition" => (float) $result->SQEndPosition,
                    "FBStartPosition" => (float) $result->FBStartPosition,
                    "FBEndPosition" => (float) $result->FBEndPosition,
                    "SQStrokeSpeed" => (float) $result->SQStrokeSpeed,
                    "FBStrokeSpeed" => (float) $result->FBStrokeSpeed,
                    "SQDownPressure" => (float) $result->SQDownPressure,
                    "FBDownPressure" => (float) $result->FBDownPressure,
                    "SQFBUpPressure" => (float) $result->SQFBUpPressure,
                    "Screenid" => $result->Screenid,
                    "Inkid" => $result->Inkid,
                    "ModifyTime" => $result->ModifyTime,
                    "tool_id" => $result->tool_id,
                    "ToolName" => "",
                )
            );
        };

        $Toolss = new Tools;
        $Tools  = $Toolss->ListAll();

        $Recipes = new Recipe;
        $Recipe  = $Recipes->ListAll();

        for ($i=0;$i<count($ArrayStatuse);$i++){

            //整理符合 Tools.id == Statue.toolid ? Status.toolname = tool.name
            for ($j=0;$j<count($Tools);$j++){
                if($Tools[$j]['id'] == $ArrayStatuse[$i]['tool_id']){
                    $ArrayStatuse[$i]['ToolName'] = $Tools[$j]['Name'];
                    break;
                };
            };

            //整理符合 Recipe.id == Status.recipe.id &&
            //        Recipe.tool_id == Status.tool_id ?
            //        Status.RecipeName = Recipe.name
            for ($j=0;$j<count($Recipe);$j++){
                $ArrayStatuse[$i]['RecipeName'] = "UnKnow";
                if( ($Recipe[$j]['id'] == $ArrayStatuse[$i]['recipe_id']) &&
                    ($Recipe[$j]['tool_id'] == $ArrayStatuse[$i]['tool_id'])
                ){
                    $ArrayStatuse[$i]['RecipeName'] = $Recipe[$j]['Name'];
                    break;
                };
            };

            //條件符合 AlarmCode.code == Status.Alarm > Status.AlarmDescription = AlarmCode.content
            $AlarmCode = AlarmCode::where('code','=',$ArrayStatuse[$i]['Alarm'])->get()[0]['content'];
            $ArrayStatuse[$i]['AlarmDescription'] = ( $AlarmCode != "Table Lock Error" )?$AlarmCode:"";

            //符合 Status.StateDescription == (Eum) Status.state
            $ArrayStatuse[$i]['StateDescription'] = $this->toString($ArrayStatuse[$i]['State']);

        };
        git remote add origin https://github.com/nexstar/Mircotec.git
git push -u origin master
        return $ArrayStatuse;
    }

    public function GetLastStatusByToolId($toolId){
        $Statuses = Statuses::where('tool_id','=', $toolId)->orderBy('CreateTime','desc')->limit(1)->get();
        dd($Statuses);
    }

    public function getListAllGroupByToolId(){
        return $this->ListAllGroupByToolId();
    }

}
