@extends('layouts.app')

@section('title', 'Layups')
@section('content')
<!-- Header Halaman -->
    <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 space-y-4 md:space-y-0">
        <div>
            <h2 class="text-3xl font-bold text-slate-900">List Layups</h2>
        </div>
        <button data-modal-target="open-modal-one" data-modal-toggle="open-modal-one" class="inline-flex items-center px-5 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold rounded-xl shadow-lg transition-all active:scale-95">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            Add New Layups
        </button>
    </div>

    <!-- Toolbar Pencarian & Filter -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-4 mb-6">
        <div class="md:col-span-8 relative">
            <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </span>
            <input type="text" placeholder="Search Layupd by name or Supplier..." class="w-full pl-11 pr-4 py-3 bg-white border border-slate-200 rounded-2xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition shadow-sm">
        </div>
        <div class="md:col-span-4 flex space-x-3">
            <button class="flex-1 flex items-center justify-center space-x-2 px-2 py-3 bg-white border border-slate-200 rounded-2xl hover:bg-slate-50 transition text-slate-600 font-medium shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                </svg>
                <span>Filter</span>
            </button>
            <button class="flex-1 flex items-center justify-center space-x-2 px-2 py-3 bg-white border border-slate-200 rounded-2xl hover:bg-slate-50 transition text-slate-600 font-medium shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                </svg>
                <span>Export</span>
            </button>
        </div>
    </div>

    <!-- Tabel Data -->
    <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-slate-50/50 border-b border-slate-200">
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Supplier Name</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Layups Name</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Total Layers</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-center">Created At</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-right">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach ($layups as $layup)
                        <tr class="hover:bg-slate-50 transition-colors group">
                        <td class="px-6 py-5">
                            <div class="flex items-center space-x-4">
                                {{-- <div class="w-11 h-11 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-sm">NT</div> --}}
                                <div>
                                    <p class="font-bold text-slate-900 leading-none">{{ $layup->supplier->name }}</p>
                                    <p class="text-xs text-slate-400 mt-1"></p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-5">
                            <span class="px-6 py-5 text-center font-semibold text-slate-700">{{ $layup->name }}</span>
                        </td>
                        <td class="px-6 py-5 text-center font-semibold text-slate-700">{{ $layup->layers->count('layups_order') }}</td>
                        <td class="px-6 py-5 text-sm text-slate-500">{{ $layup->created_at->format('Y-m-d') }}</td>
                        <td class="px-6 py-5 text-right">
                            <a href="{{ route('inventory.layers', $layup->id) }}" class="inline-flex items-center px-4 py-2 bg-slate-600 hover:bg-slate-700 text-white text-sm font-semibold rounded-xl shadow-lg transition-all active:scale-95">More</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Footer Tabel / Paginasi -->
        <div class="px-6 py-4 bg-slate-50/50 border-t border-slate-200 flex items-center justify-between">
            <p class="text-xs text-slate-500 font-medium">
                Menampilkan <span class="text-slate-900">1</span> sampai <span class="text-slate-900">4</span> dari <span class="text-slate-900">42</span> data Supplier
            </p>
            <div class="flex items-center space-x-2">
                <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-200 bg-white text-slate-400 hover:bg-slate-50 transition disabled:opacity-50" disabled>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                </button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-emerald-600 text-white text-xs font-bold">1</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-white border border-slate-200 text-slate-600 text-xs font-medium hover:bg-slate-50 transition">2</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-white border border-slate-200 text-slate-600 text-xs font-medium hover:bg-slate-50 transition">3</button>
                <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-200 bg-white text-slate-600 hover:bg-slate-50 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                </button>
            </div>
        </div>
    </div>

{{-- Modal --}}
<div id="open-modal" tabindex="-1" class="fixed inset-0 z-[100] hidden items-center justify-center bg-slate-900/40 backdrop-blur-sm transition-opacity duration-300 opacity-0">
    <div id="modalContent" class="relative w-full max-w-md p-4 transition-all duration-300 modal-closed">
        <div class="relative bg-white rounded-3xl shadow-2xl overflow-hidden">

            <button type="button" data-modal-hide="open-modal" class="absolute top-4 right-4 text-slate-400 bg-transparent hover:bg-slate-100 hover:text-slate-900 rounded-xl text-sm w-9 h-9 inline-flex justify-center items-center transition-colors">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>

            <div class="px-8 pt-10 pb-6 text-center">
                <div class="w-16 h-16 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900">Add New Supplier</h3>
            </div>

            <form class="px-8 pb-8" id="formSupplier">
                <div class="space-y-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider pl-1 mb-2">Supplier Name</label>
                        <input type="text" id="supplier_name" required placeholder="Ex: PT. Kayu Maju"
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition text-slate-700">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3 mt-8">
                    <button data-modal-hide="open-modal" type="button" class="px-4 py-3 bg-slate-100 hover:bg-slate-200 text-slate-600 font-semibold rounded-2xl transition">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-2xl shadow-lg shadow-emerald-100 transition active:scale-95">
                        Add
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="open-modal-one" tabindex="-1"
    class="fixed inset-0 z-[100] hidden items-center justify-center bg-slate-900/40 backdrop-blur-sm transition-opacity duration-300 opacity-0">

    <div class="relative w-full max-w-md p-4 transition-all duration-300 modal-closed">
        <div class="relative bg-white rounded-3xl shadow-2xl overflow-hidden">

            <form action="{{ route('inventory.check') }}" method="POST" enctype="multipart/form-data"
                x-data="{ fileName: null }">
                @csrf

                {{-- Close --}}
                <button type="button" data-modal-hide="open-modal-one"
                    class="absolute top-6 right-6 text-slate-400 hover:bg-slate-100 hover:text-slate-900 rounded-xl text-sm w-9 h-9 inline-flex justify-center items-center transition-colors z-10">
                    ✕
                </button>

                {{-- Header --}}
                <div class="px-8 py-6 border-b border-slate-100 bg-slate-50/30">
                    <h2 class="text-xl font-bold text-slate-800">Import Layup Data</h2>
                </div>

                <div class="max-h-[65vh] overflow-y-auto p-8 space-y-6">

                    {{-- Layup Name --}}
                    <div>
                        <label
                            class="block text-xs font-bold text-slate-400 uppercase tracking-wider pl-1 mb-2">
                            Supplier
                        </label>
                        <select name="supplier" id="supplier"
                            class="w-full appearance-none px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-medium text-slate-700 outline-none transition-all duration-200 cursor-pointer hover:border-slate-300 focus:bg-white focus:ring-4 focus:ring-emerald-500/10 focus:border-emerald-600 shadow-sm">
                            @foreach ($supplier as $supply)
                                <option value="{{ $supply->id }}">{{ $supply->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label
                            class="block text-xs font-bold text-slate-400 uppercase tracking-wider pl-1 mb-2">
                            Layup Name
                        </label>
                        <input type="text" name="name" required placeholder="Ex: CLT-5-150-L"
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none">
                    </div>

                    {{-- Upload File --}}
                    <div class="relative group">
                        <input type="file"
                            name="import_file"
                            accept=".json,.csv"
                            @change="fileName = $event.target.files[0]?.name"
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20">

                        <div :class="fileName ? 'border-emerald-500 bg-emerald-50/30' : 'border-slate-200 bg-slate-50/50'"
                            class="border-2 border-dashed p-8 rounded-2xl flex flex-col items-center justify-center text-center transition-all">

                            <div
                                class="w-12 h-12 rounded-full flex items-center justify-center shadow-sm border mb-4"
                                :class="fileName ? 'bg-emerald-600 text-white' : 'bg-white text-emerald-600'">

                                <template x-if="!fileName">
                                    <span>↑</span>
                                </template>

                                <template x-if="fileName">
                                    <span>✓</span>
                                </template>
                            </div>

                            <template x-if="!fileName">
                                <div>
                                    <p class="text-sm text-slate-600">
                                        <span class="text-emerald-700 font-bold">Click to upload</span>
                                        or drag and drop
                                    </p>
                                    <p class="text-[11px] text-slate-400 uppercase">
                                        CSV or JSON up to 10MB
                                    </p>
                                </div>
                            </template>

                            <template x-if="fileName">
                                <div>
                                    <p class="text-sm font-bold text-emerald-800">File Selected</p>
                                    <p class="text-xs text-emerald-600 font-mono" x-text="fileName"></p>
                                </div>
                            </template>
                        </div>
                    </div>

                    {{-- ADVANCED OPTIONS (show after upload) --}}
                    <div x-show="fileName"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        class="space-y-6">

                        {{-- Conflict Strategy --}}
                        <div x-data="{
                            open: false,
                            selected: 'skip',
                            label: 'Skip conflicts (Default)',
                            options: [
                                { val: 'skip', label: 'Skip conflicts (Default)' },
                                { val: 'overwrite', label: 'Overwrite existing data' },
                                { val: 'duplicate', label: 'Duplicate layup' }
                            ]
                        }" class="relative">

                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2 pl-1">Conflict Strategy</label>

                            <input type="hidden" name="strategy" :value="selected">

                            <div class="relative">
                                <button
                                    @click="open = !open"
                                    @click.away="open = false"
                                    type="button"
                                    class="w-full flex items-center justify-between px-4 py-3 bg-white border border-slate-200 rounded-xl text-sm text-slate-700 focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-600 transition-all outline-none text-left"
                                    :class="open ? 'border-emerald-600 ring-2 ring-emerald-500/20' : ''">
                                    <span x-text="label"></span>
                                    <svg class="w-4 h-4 text-slate-400 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>

                                <div
                                    x-show="open"
                                    x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    class="absolute z-[110] w-full mt-2 bg-white border border-slate-100 shadow-xl rounded-2xl overflow-hidden py-1">
                                    <template x-for="option in options" :key="option.val">
                                        <div
                                            @click="selected = option.val; label = option.label; open = false"
                                            class="px-4 py-3 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-700 cursor-pointer transition-colors flex items-center justify-between group">
                                            <span x-text="option.label"></span>
                                            <svg x-show="selected === option.val" class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>

                        {{-- Dry Run --}}
                        <label class="p-4 border border-slate-200 rounded-xl flex items-start space-x-4 bg-white hover:bg-slate-50 transition-colors cursor-pointer group">
                        <div class="mt-1">
                            <input type="checkbox" name="dry_run" value="1" class="w-4 h-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <p class="text-sm font-bold text-slate-700">Run as Dry Run</p>
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.628.293a2 2 0 01-1.066.215H8m-2.29-2.29a3 3 0 104.242 4.242M8 11V7a4 4 0 118 0v4M8 11h8" /></svg>
                            </div>
                            <p class="text-[11px] text-slate-400 mt-0.5 leading-relaxed">Simulate process without saving changes.</p>
                        </div>
                    </label>

                        {{-- Conflict Alert --}}
                        @if(session('conflicts'))
                            <div class="p-4 bg-red-50 border border-red-100 rounded-2xl">
                                <p class="text-sm font-bold text-red-900">Conflicts Detected</p>
                                <p class="text-xs text-red-700 mt-1">
                                    {{ count(session('conflicts')) }} conflicts found.
                                    Review required before importing.
                                </p>
                            </div>
                        @endif
                    </div>
                </div>

                {{-- Footer (show after upload only) --}}
                <div x-show="fileName"
                    x-transition
                    class="px-8 py-6 bg-slate-50/50 border-t border-slate-100 flex justify-end space-x-3">

                    <button type="button" data-modal-hide="open-modal-two"
                        class="px-5 py-2.5 text-sm font-bold text-slate-600 bg-white border border-slate-200 rounded-xl">
                        Cancel
                    </button>

                    <button type="submit"
                        class="px-5 py-2.5 text-sm font-bold text-white bg-emerald-700 hover:bg-emerald-800 rounded-xl shadow-lg shadow-emerald-200">
                        Analyze Import
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
