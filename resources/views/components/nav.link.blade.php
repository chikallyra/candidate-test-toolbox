@props(['active'])

<a {{ $attributes->class([
    'text-sm transition inline-flex items-center h-full', // Tambahkan h-full agar border bawah mentok ke dasar navbar
    'font-semibold text-emerald-600 border-b-2 border-emerald-600 pb-7 -mb-7' => $active,
    'font-medium text-slate-500 hover:text-emerald-600' => !$active,
]) }}>
    {{ $slot }}
</a>
