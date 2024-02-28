@extends('layout')

@section('title')
    <title>About</title>
@endsection

@section('content')
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Flex Container: Default is column, changes to row on medium screens -->
        <div class="flex flex-col lg:flex-row gap-4 py-10">

            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <div class="max-w-2xl mx-auto">
                    <!-- Grid -->
                    <div class="grid gap-12">
                        <div>
                            <h2 class="text-3xl text-gray-800 font-bold lg:text-4xl dark:text-white">
                               Good Day
                            </h2>
                            <p class="mt-3 text-gray-800 dark:text-gray-400">
                                I am a web developer with a passion for open source - I have spent decades developing and using other
                                peoples code and ideas. This is my way of trying to give something back. If I help one person with an aha moment
                                or clarified some topic then I have succeeded..

                            </p>
                        </div>

                        <div class="space-y-6 lg:space-y-10">
                            <!-- Icon Block -->
                            <div class="flex">

                                <div class="ms-5 sm:ms-8">
                                    <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-gray-200">
                                        Enjoy and understand the shiny..
                                    </h3>
                                    <p class="mt-1 text-gray-600 dark:text-gray-400">
                                        I have always tried to see the bigger picture and understand development in terms of the overall ecosystem.
                                        Shiny is fun, shiny is fast - shiny is a bitch to support....
                                        I will always be frank about my experiences - if something sucks - I'll let you know why I think so!

                                    </p>
                                </div>
                            </div>
                            <!-- End Icon Block -->

                            <!-- Icon Block -->
                            <div class="flex">
                               <div class="ms-5 sm:ms-8">
                                    <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-gray-200">
                                        Explaining my discoveries
                                    </h3>
                                    <p class="mt-1 text-gray-600 dark:text-gray-400">
                                        Whether a new or a seasoned developer - we all see things differently and exist in vastly different environments - I have an unorthodox way of seeing problems
                                        and developing solutions and perhaps though one of my articles I can help you see things differently and approach solutions from a different perspective.
                                    </p>
                                </div>
                            </div>
                            <!-- End Icon Block -->

                            <!-- Icon Block -->
                            <div class="flex">
                                <div class="ms-5 sm:ms-8">
                                    <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-gray-200">
                                        Sparking conversation
                                    </h3>
                                    <p class="mt-1 text-gray-600 dark:text-gray-400">
                                        I don't really want to create a high traffic website, its ad free and self funded - but I do hope folk engage and we can have meaningful and beneficial
                                    interactions.
                                </div>
                            </div>
                            <!-- End Icon Block -->
                            <div class="flex">
                                <div class="ms-5 sm:ms-8">
                                    <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-gray-200">
                                       Cheers
                                    </h3>
                                    <p class="mt-1 text-gray-600 dark:text-gray-400">
                                     Colin
                            </div>
                            <!-- End Icon Block -->
                        </div>
                    </div>
                    <!-- End Grid -->
                </div>
            </div>
            <!-- End Icon Blocks -->


        </div>
    </div>


@endsection

