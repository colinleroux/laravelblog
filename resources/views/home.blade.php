@extends('layout')

@section('title')
<title>Home</title>
@endsection

@section('content')
<div class="mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col lg:flex-row gap-4 py-10">
        <div class="flex-1 lg:max-w-5xl"> <!-- Adjust the max-width as needed -->
            @include('vendor.list')
        </div>
        <div class="w-full lg:w-1/4 lg:max-w-xs"> <!-- Sidebar width and max-width -->
            @include('vendor.sidebar')
        </div>
    </div>
</div>
@endsection