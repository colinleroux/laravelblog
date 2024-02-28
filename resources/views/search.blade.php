@extends('layout')

@section('title')
<title>Search - {{ $key }}</title>
@endsection



@section('content')
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Flex Container: Default is column, changes to row on medium screens -->
        <div class="flex flex-col lg:flex-row gap-4 py-10">

            <!-- Posts Section: Takes full width on small screens, adjusted on medium screens -->
            <div class="w-full lg:flex-grow">
                @include('vendor.list')
            </div>

            <!-- Sidebar Section: Takes full width on small screens, adjusted on medium screens -->
            <div class="w-full md:w-1/4 lg:max-w-xs">
                @include('vendor.sidebar')
            </div>

        </div>
    </div>


@endsection