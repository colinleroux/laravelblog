<div class="col-span-1">
  <div class="border rounded-md mb-4">
    <div class="bg-teal-700 p-4 rounded-t-md text-white text-xs uppercase font-semibold font-sans w-full">Search</div>
    <div class="p-4">
      <form action="{{ route('search') }}" method="POST" class="grid grid-cols-4 gap-2">
        {{ csrf_field() }}
        <input type="text" name="q" id="search" class="border rounded-md w-full focus:ring p-2 col-span-3 font-poppins" placeholder="Search something..." />
        <button type="submit" class="bg-teal-700 hover:bg-teal-900 rounded-md p-1 text-white text-xs uppercase font-semibold font-sans w-full focus:ring col-span-1">
          Search
        </button>
      </form>
    </div>
  </div>
  <div class="border rounded-md mb-4">
    <div class="bg-teal-700 p-4 rounded-t-md text-white text-xs uppercase font-semibold font-poppins w-full">Categories</div>
    <div class="p-4">
      <ul class="list-none list-inside">
        @foreach ($categories as $category)
        <li>
          <a href="{{ route('category', ['category' => $category->id]) }}" class="text-gray-900 font-poppins hover:underline">{{ $category->name }}</a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
  <div class="border rounded-md mb-4">
    <div class="bg-teal-700 p-4 rounded-t-md text-white text-sm uppercase font-semibold font-poppins w-full">Tags</div>
    <div class="p-4">
      @foreach ($tags as $tag)
      <span class="mr-2"><a href="{{ route('tag', ['tag' => $tag->id]) }}" class="text-gray-900 font-poppins hover:underline">{{ $tag->name }}</a></span>
      @endforeach
    </div>
  </div>
  <div class="border rounded-md mb-4">
    <div class="bg-teal-700 p-4 rounded-t-md text-white text-sm uppercase font-semibold font-poppins w-full">Some Interesting Info</div>
    <div class="p-4 font-poppins">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat,
        voluptatem ab tempore recusandae sequi libero sapiente autem! Sit hic
        reprehenderit pariatur autem totam, voluptates non officia accusantium
        rerum unde provident!
      </p>
    </div>
  </div>
  <div class="border rounded-md mb-4 ">
    <div class="bg-teal-700 p-4 rounded-t-md text-white text-sm uppercase font-semibold font-poppins w-full">More info on something</div>
    <div class="p-4 font-poppins">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat,
        voluptatem ab tempore recusandae sequi libero sapiente autem! Sit hic
        reprehenderit pariatur autem totam, voluptates non officia accusantium
        rerum unde provident!
      </p>
    </div>
  </div>
</div>