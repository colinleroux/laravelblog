<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Posts') }}
            </h2>
            <a href="{{ route('posts.create') }}">
                <x-primary-button>{{ __('New') }}</x-primary-button>
            </a>
        </div>

        @vite(['resources/js/app.js'])
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="">
                    <form action="{{ route('posts.store') }}" method="POST" class="mt-6 space-y-3" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="checkbox" name="is_published" id="is_published">
                        <x-input-label for="is_published">Make this post public yes</x-input-label>
                        <br>
                        <x-input-label for="title">{{ __('Title') }}</x-input-label>
                        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
                        <br>
                        <x-input-label for="content">{{ __('Content') }}</x-input-label>
                        <textarea name="content" id="blogPostContent" cols="30" rows="30"></textarea>
                        <br>
                        <x-input-label for="cover">{{ __('Cover Image') }}</x-input-label>
                        <x-text-input id="cover" name="cover" type="file" class="mt-1 block w-full" required autofocus autocomplete="cover" />
                        <br>
                        <x-input-label for="category">{{ __('Category') }}</x-input-label>
                        <select id="category" name="category">
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <br>
                        <x-input-label for="tags">{{ __('Tags') }}</x-input-label>
                        <select id="tags" name="tags[]" multiple>
                            @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                        <br>
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                    </form>
                   
                </div>
            </div>

        </div>
    </div>
</x-app-layout>