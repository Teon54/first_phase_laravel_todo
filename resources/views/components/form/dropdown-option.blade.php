@props(['id','active','name'])
<li>
    <div
        class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
        <input
            {{ $active ? 'checked' : '' }}
            id="{{ $id }}"
            type="radio"
            value="{{ $id }}"
            name="{{ $name }}"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500
            dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700
            focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
        <label
            for="{{ $id }}"
            class="w-full ms-2 text-sm font-medium text-gray-900 rounded
            dark:text-gray-300">{{ $slot }}</label>
    </div>
</li>
