@extends('layouts.main')

@section('content')
    <div id="app">
        <dashboard></dashboard>
    </div>
@endsection

@section('script')
    <script src="{{ url('lib/date.f/dist/date.f-0.5.0.js') }}"></script>
@endsection
