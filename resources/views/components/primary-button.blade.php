<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex p-3 px-10 bg-rgba-blue-sky-100 text-white rounded-md hover:bg-rgba-blue-sky-200
    text-sm active:transform active:translate-y-1 transition-all hover:ring cursor-pointer ']) }}>
    {{ $slot }}
</button>
