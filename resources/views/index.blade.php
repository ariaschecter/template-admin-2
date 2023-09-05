@extends('layouts.vertical', ['title' => __('Dashboard'), 'sub_title' => 'Menu', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')

@endsection

@section('script')
    @vite('resources/js/pages/dashboard.js')
@endsection
