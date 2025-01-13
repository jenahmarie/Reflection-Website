<header class="bg-gray-900 text-white">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <div class="text-2xl font-bold">
        <span class="text-pink-500">Jen</span>ah
      </div>
      <nav class="space-x-6">
        <a class="hover:text-pink-500 {{ Request::routeIs('homepage') ? 'text-pink-500' : '' }}" href="{{ route('homepage') }}">Homepage</a>
        <a class="hover:text-pink-500 {{ Request::routeIs('profile') ? 'text-pink-500' : '' }}"href="{{ route('profile') }}">Profile</a>
        <a class="hover:text-pink-500 {{ Request::routeIs('journal') ? 'text-pink-500' : '' }}"href="{{ route('journal') }}">Journals</a>
        <a class="hover:text-pink-500 {{ Request::routeIs('reflection') ? 'text-pink-500' : '' }}"href="{{ route('reflection') }}">Reflection</a>
        <a class="hover:text-pink-500 {{ Request::routeIs('album') ? 'text-pink-500' : '' }}"href="{{ route('album') }}">My Album</a>
      </nav>
      <button class="bg-white text-gray-900 px-4 py-2 rounded-full">Contact Me</button>
    </div>
  </header>
