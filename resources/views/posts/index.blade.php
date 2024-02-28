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
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach($posts as $post)
                <div>
                    <img src="{{ Illuminate\Support\Facades\Storage::url($post->cover) }}" alt="cover image" width="200">
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 px-4 h-20 flex justify-between items-center">
                <div class="text-gray-900 dark:text-gray-100">
                    <p>{{ $post->title }}</p>
                </div>


                <div class="space-x-2">
                    <a href="{{ route('posts.edit', ['post' => $post->id]) }}"> <x-primary-button>{{ __('Edit') }}</x-primary-button></a>
                    <form method="post" action="{{ route('posts.destroy', ['post' => $post->id]) }}" class="inline">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <x-danger-button>
                            {{ __('Delete') }}
                        </x-danger-button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>