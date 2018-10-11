@extends('layouts.main')
@section('content')
    {{ Form::open(['id' => 'createrecipe', 'method' => 'POST','style' => 'margin-top: 5%','action' => 'RecipeController@store','files'=> true]) }}
    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <div class="recipe-star">
            <div class="row">
                <div class="machine-name m01 col-12 col-md-10 col-lg-5">
                    <p>Recipe</p>
                    <div class="col-12 col-sm-12 col-md-10 input-name">
                        <input type="text" placeholder="Name" name="Name" value="@Model?.Name" class="form-control" />
                    </div>
                </div>
            </div>

            <!-- 表單 -->
            <div class="container">
                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            Work Thickness
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="WorkThickness" name="WorkThickness" value="@Model?.WorkThickness" class="form-control" />
                    </div>
                    <div class="col-1 unit-r">
                        <label>
                            mm
                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            Snap Off
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="SnapOff" name="SnapOff" value="@Model?.SnapOff" class="form-control" />
                    </div>
                    <div class="col-1 unit-r">
                        <label>
                            mm
                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            Print Times
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="PrintTimes" name="PrintTimes" value="@Model?.PrintTimes" class="form-control">
                    </div>
                    <div class="col-1 unit-r">
                        <label>
                            Times
                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            Low Speed Down Height
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="LowSpeedDownHeight" name="LowSpeedDownHeight" value="@Model?.LowSpeedDownHeight" class="form-control">
                    </div>
                    <div class="col-1 unit-r">
                        <label>
                            mm
                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            Low Speed Down Speed
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="LowSpeedDownSpeed" name="LowSpeedDownSpeed" value="@Model?.LowSpeedDownSpeed" class="form-control">
                    </div>
                    <div class="col-1 unit-r">
                        <label>
                            mm/sec
                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            SQ Stroke Delay
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="SQStrokeDelay" name="SQStrokeDelay" value="@Model?.SQStrokeDelay" class="form-control" />
                    </div>
                    <div class="col-1 unit-r">
                        <label>
                            sec
                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            SQ Up Delay
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="SQUpDelay" name="SQUpDelay" value="@Model?.SQUpDelay" class="form-control" />
                    </div>
                    <div class="col-1 unit-r">
                        <label>
                            sec
                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            Table Down Delay
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="TableDownDelay" name="TableDownDelay" value="@Model?.TableDownDelay" class="form-control">
                    </div>
                    <div class="col-1 unit-r">
                        <label>
                            sec
                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            Cleaning Times
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="CleaningTimes" name="CleaningTimes" value="@Model?.CleaningTimes" class="form-control">
                    </div>
                    <div class="col-1 unit-r">
                        <label>
                            Times
                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            Chucks Times
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="ChucksTimes" name="ChucksTimes" value="@Model?.ChucksTimes" class="form-control" />
                    </div>
                    <div class="col-1 unit-r">
                        <label>
                            Times
                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            Screen Size
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="ScreenSize" name="ScreenSize" value="@Model?.ScreenSize" class="form-control" />
                    </div>
                    <div class="col-1 unit-r">
                        <label>

                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            SQ Start Position
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="SQStartPosition" name="SQStartPosition" value="@Model?.SQStartPosition" class="form-control" />
                    </div>
                    <div class="col-1 unit-r">
                        <label>
                            mm
                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            SQ End Position
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="SQEndPosition" name="SQEndPosition" value="@Model?.SQEndPosition" class="form-control" />
                    </div>
                    <div class="col-1 unit-r">
                        <label>
                            mm
                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            FB Start Position
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="FBStartPosition" name="FBStartPosition" value="@Model?.FBStartPosition" class="form-control" />
                    </div>
                    <div class="col-1 unit-r">
                        <label>
                            mm
                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            FB End Position
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="FBEndPosition" name="FBEndPosition" value="@Model?.FBEndPosition" class="form-control" />
                    </div>
                    <div class="col-1 unit-r">
                        <label>
                            mm
                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            SQ Stroke Speed
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="SQStrokeSpeed" name="SQStrokeSpeed" value="@Model?.SQStrokeSpeed" class="form-control" />
                    </div>
                    <div class="col-1 unit-r">
                        <label>
                            mm/sec
                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            FB Stroke Speed
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="FBStrokeSpeed" name="FBStrokeSpeed" value="@Model?.FBStrokeSpeed" class="form-control" />
                    </div>
                    <div class="col-1 unit-r">
                        <label>
                            mm/sec
                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            SQ Down Pressure
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="SQDownPressure" name="SQDownPressure" value="@Model?.SQDownPressure" class="form-control" />
                    </div>
                    <div class="col-1 unit-r">
                        <label>
                            Mpa
                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            FB Down Pressure
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="FBDownPressure" name="FBDownPressure" value="@Model?.FBDownPressure" class="form-control" />
                    </div>
                    <div class="col-1 unit-r">
                        <label>
                            Mpa
                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            SQ FB Up Pressure
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="SQFBUpPressure" name="SQFBUpPressure" value="@Model?.SQFBUpPressure" class="form-control" />
                    </div>
                    <div class="col-1 unit-r">
                        <label>
                            Mpa
                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            Screen ID
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="ScreenID" name="ScreenID" value="@Model?.ScreenID" class="form-control" />
                    </div>
                    <div class="col-1 unit-r">
                        <label>

                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            Ink ID
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="InkID" name="InkID" value="@Model?.InkID" class="form-control" />
                    </div>
                    <div class="col-1 unit-r">
                        <label>

                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            Alignment Pattern Number
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="AlignmentPatternNumber" name="AlignmentPatternNumber" value="@Model?.AlignmentPatternNumber" class="form-control" />
                    </div>
                    <div class="col-1 unit-r">
                        <label>

                        </label>
                    </div>
                </div>

                <div class="row f-row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label>
                            Alignment Pattern Name
                        </label>
                    </div>
                    <div class="col-4 col-md-7">
                        <input type="text" placeholder="AlignmentPatternName" name="AlignmentPatternName" value="@Model?.AlignmentPatternName" class="form-control" />
                    </div>
                    <div class="col-1 unit-r">
                        <label>

                        </label>
                    </div>
                </div>
            </div>

            <div class="button">
                <a href="{{ url('recipe','0') }}" class="btn btn-primary  btn-back" role="button">BACK</a>
                <input class="btn btn-primary btn-save" type="submit" value="SAVE">
            </div>
        </div>
    </main>
    {{ Form::close() }}
@endsection

@section('script')
    <link href="{{ url('css/recipe-index.css') }}" rel="stylesheet"/>
    <link href="{{ url('css/edit.css') }}" rel="stylesheet"/>
@endsection