<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('recipe_id');
            $table->integer('Quantity');
            $table->dateTime('CreateTime');
            $table->integer('State');
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
            $table->string('Screenid',20)->collation('utf8_unicode_ci');
            $table->string('Inkid',20)->collation('utf8_unicode_ci');
            $table->decimal('AlignmentPatternNumber');
            $table->string('AlignmentPatternName',500)->collation('utf8_unicode_ci');
            $table->dateTime('ModifyTime')->useCurrent();
            $table->integer('tool_id');
            $table->integer('Alarm');
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
        Schema::dropIfExists('statuses');
    }
}
