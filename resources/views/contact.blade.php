@extends('layout')

@section('content')
    <div class="container mx-auto px-4">
    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Me</h1>
            
          </div>
          <div class="lg:w-1/2 md:w-2/3 mx-auto">

          @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

          <form action="{{ route('contact.send') }}" method="POST">
            @csrf
          <div class="flex flex-wrap -m-2">
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                  <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 
                  focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  @error('name')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                  <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  @error('email')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
                
                </div>
              </div>
              <div class="p-2 w-full">
                <div class="relative">
                  <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                  <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                  @error('message')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
                </div>
              </div>
              <div class="p-2 w-full">
                <button type="submit" class="flex mx-auto text-white bg-teal-700 border-0 py-2 px-8 focus:outline-none hover:bg-teal-600 rounded text-lg">Send</button>
              </div>
              <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">

                <p class="leading-normal my-5">Perth WA 
                  <br>Australia.
                </p>

              </div>
            </div>

          </form>
          </div>
        </div>
      </section>
    </div>
@endsection

