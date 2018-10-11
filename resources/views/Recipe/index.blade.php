@extends('layouts.main')
@section('content')
    <main class="start-m col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3" style="margin-top: 1.6%">
        {{-- 機台名稱 --}}
        <div class="machine">
            <div class="machine-name m01">
                <p>Name</p>
                <h1>DEMO1</h1>
            </div>
            <div class="t01 col-sm-12 col-12 col-md-12 col-lg-12">
                {{-- create --}}
                <a id="add" href="{{ route('recipe.create', '1') }}">
                    <i class="fas fa-plus-circle"></i>ADD RECIPE
                </a>
                {{-- back --}}
                <a id="back" href="{{ url('Dashboard') }}">
                    <i class="fas fa-chevron-circle-left"></i>BACK
                </a>
                <hr>
            </div>
        </div>
        <div class="row">
        @for($i=0;$i<2;$i++)
            <!-- Recipe2 -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 recipe">
                    {{-- need add recipe-activ --}}
                    <div class="row01 recipe-name ">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                    {{--@if (inUseRecipeId.HasValue && inUseRecipeId.Value == item.Id)--}}
                                    @if (1)
                                        {{-- Delete --}}
                                        {{ Form::open(['id' => ('delete'.$i), 'method' => 'DELETE', 'action' => ['RecipeController@destroy',$i] ]) }}
                                        {{ Form::close() }}
                                        <a style="cursor: pointer;" onclick="confirm('is delete') == true? $('#delete{{$i}}').submit():''">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    @else
                                        <a href="#">
                                            <i class="fas fa-caret-right"></i>
                                        </a>
                                    @endif
                                </td>
                                <td class="item01">Recipe</td>
                                <td class="item02">
                                    <h4>JackTest</h4>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    {{--@if (inUseRecipeId.HasValue && inUseRecipeId.Value == item.Id && (toolStatus.HasValue && toolStatus != (int)ToolStatus.Stop))--}}
                    @if(1)
                        {{-- 可進行修改 --}}
                        {{-- Edit --}}
                        <a href="{{ route('recipe.edit',$i) }}">
                            <div class="row01 recipe-set">
                                <i class="fas fa-cog set-icon-size"></i>
                            </div>
                        </a>
                    @else
                        <a href="#">
                            <div class="row01 recipe-set-none">
                                <i class="fas fa-cog set-icon-size"></i>
                            </div>
                        </a>
                    @endif
                </div>
            @endfor
        </div>
    </main>
@endsection

@section('script')
    <link href="{{ url('css/recipe-index.css') }}" rel="stylesheet"/>
@endsection