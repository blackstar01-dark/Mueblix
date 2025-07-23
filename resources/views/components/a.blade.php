<a {{ $attributes->class(['block py-2 px-3 text-white bg-green-700 rounded-sm md:bg-transparent md:text-green-700 md:p-0 md:dark:text-green-500'])->merge(['aria-current' => 'page']) }}>
    {{ $slot }}
</a>