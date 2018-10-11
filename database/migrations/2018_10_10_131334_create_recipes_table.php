<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('Name',500)->collation('utf8_unicode_ci');
            $table->decimal('WorkThickness');
            $table->decimal('SnapOff');
            $table->decimal('PrintTimes');
            $table->decimal('LowSpeedDownHeight');
            $table->decimal('LowSpeedDownSpeed');
            $table->decimal('SQStrokeDelay');
            $table->decimal('SQUpDelay');
            $table->decimal('TableDownDelay');
            $table->decimal('CleaningTimes');
            $table->decimal('ChucksTimes');
            $table->decimal('ScreenSize');
            $table->decimal('SQStartPosition');
            $table->decimal('SQEndPosition');
            $table->decimal('FBStartPosition');
            $table->decimal('FBEndPosition');
            $table->decimal('SQStrokeSpeed');
            $table->decimal('FBStrokeSpeed');
            $table->decimal('SQDownPressure');
            $table->decimal('FBDownPressure');
            $table->decimal('SQFBUpPressure');
            $table->string('ScreenID',20)->collation('utf8_unicode_ci');
            $table->string('InkID',20)->collation('utf8_unicode_ci');
            $table->decimal('AlignmentPatternNumber');
            $table->dateTime('CreateTime');
            $table->dateTime('ModifyTime')->useCurrent();
            $table->integer('tool_id');
            $table->string('AlignmentPatternName',500)->collation('utf8_unicode_ci');
//            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
