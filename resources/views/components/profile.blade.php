<img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="{{ auth()->user()->profile ? asset('storage/' . auth()->user()->profile) : asset('/images/logo/profile.webp') }}" alt="User dropdown">

<div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
        <div>{{ auth()->user()->name }}</div>
        <div class="font-medium truncate">{{ auth()->user()->email }}</div>
    </div>
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
        <li>
            <a href="/tasks" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
        </li>
    </ul>
    <div class="py-1">
        <a
            href="#"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600
            dark:text-gray-200 dark:hover:text-white"
            x-data="{}"
            @click.prevent="document.querySelector('#logout-form').submit()"
        >
            Log Out
        </a>
        <form id="logout-form" action="/logout" method="POST" class="hidden">
            @csrf
        </form>
    </div>
</div>
