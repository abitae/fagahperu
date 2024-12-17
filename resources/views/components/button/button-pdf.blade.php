<button {{ 
$attributes->merge([
    'class' => 'inline-flex items-center px-2 py-2 bg-purple-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-purple-500 active:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    <i class="fa-solid fa-file-pdf"></i>
    {{ $slot }}
</button>
