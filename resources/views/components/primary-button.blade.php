<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-2 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-xm text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
