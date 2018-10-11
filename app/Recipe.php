<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';
    protected $fillable = [
        'Name','WorkThickness','SnapOff','PrintTimes','LowSpeedDownHeight',
        'LowSpeedDownSpeed','SQStrokeDelay','SQUpDelay','TableDownDelay','CleaningTimes',
        'ChucksTimes','ScreenSize','SQStartPosition','SQEndPosition','FBStartPosition',
        'FBEndPosition','SQStrokeSpeed','FBStrokeSpeed','SQDownPressure','FBDownPressure',
        'SQFBUpPressure','Screenid','Inkid','AlignmentPatternNumber','CreateTime',
        'ModifyTime','tool_id','AlignmentPatternName'
    ];

    public function GetById($recipeId){
        //SELECT * FROM Recipes WHERE `id` = @recipeId
        return Recipe::findOrFail($recipeId);
    }

    public function ListAllByToolId($toolid){
        //SELECT * FROM Recipes WHERE `ToolId` = @toolId Order By ModifyTime DESC
        return Recipe::where('tool_id','=',$toolid)->orderby('ModifyTime','desc')->get();;
    }

    public function ListAll(){
        //SELECT * FROM Recipes
        $ArrayRecipe = [];
        $Recipes = Recipe::all();

        foreach ($Recipes as $result){
            array_push($ArrayRecipe,
                array(
                    'id' => $result->id,
                    'Name' => $result->Name,
                    'WorkThickness' => (float) $result->WorkThickness,
                    'SnapOff' => (float) $result->SnapOff,
                    'PrintTimes' => (float) $result->PrintTimes,
                    'LowSpeedDownHeight' => (float) $result->LowSpeedDownHeight,
                    'LowSpeedDownSpeed' => (float) $result->LowSpeedDownSpeed,
                    'SQStrokeDelay' => (float) $result->SQStrokeDelay,
                    'SQUpDelay' => (float) $result->SQUpDelay,
                    'TableDownDelay' => (float) $result->TableDownDelay,
                    'CleaningTimes' => (float) $result->CleaningTimes,
                    'ChucksTimes' => (float) $result->ChucksTimes,
                    'ScreenSize' => (float) $result->ScreenSize,
                    'SQStartPosition' => (float) $result->SQStartPosition,
                    'SQEndPosition' => (float) $result->SQEndPosition,
                    'FBStartPosition' => (float) $result->FBStartPosition,
                    'FBEndPosition' => (float) $result->FBEndPosition,
                    'SQStrokeSpeed' => (float) $result->SQStrokeSpeed,
                    'FBStrokeSpeed' => (float) $result->FBStrokeSpeed,
                    'SQDownPressure' => (float) $result->SQDownPressure,
                    'FBDownPressure' => (float) $result->FBDownPressure,
                    'SQFBUpPressure' => (float) $result->SQFBUpPressure,
                    'AlignmentPatternNumber' => (float) $result->AlignmentPatternNumber,
                    'Screenid' => $result->Screenid,
                    'Inkid' => $result->Inkid,
                    'AlignmentPatternName' => $result->AlignmentPatternName,
                    'CreateTime' => $result->CreateTime,
                    'ModifyTime' => $result->ModifyTime,
                    'tool_id' => $result->tool_id,
                )
            );
        }

        return $ArrayRecipe;
    }
    public function GetByIdAndToolId($dataRecipeId, $dataToolId){
        //"SELECT * FROM Recipes WHERE `ToolId` = @toolId AND `id` = @recipeId Order By ModifyTime DESC";
        Recipe::where('tool_id','=',$dataToolId)->where('id','=',$dataRecipeId)->orderBy('ModifyTime','desc')->get();

    }
    public function CheckNameRepeatByToolId($recipeName, $toolId){
        //"SELECT COUNT(id) FROM Recipes WHERE `ToolId` = @toolId AND `Name` = @recipeName";
        return count(Recipe::where('tool_id','=',$toolId)->where(Name,'=',$recipeName)->get());
    }

}
