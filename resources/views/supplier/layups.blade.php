@extends('layouts.app')

@section('content')
<!-- Breadcrumbs -->
    <nav class="flex text-xs font-medium text-slate-400 mb-6 space-x-2">
        <a href="{{ route('supplier.index') }}" class="hover:text-emerald-600 transition">Suppliers</a>
        <span>/</span>
        <span class="text-slate-600">{{ $supply->name }}</span>
    </nav>

    <!-- Supplier Detail Card -->
    <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden mb-8">
        <div class="p-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
                <div>
                    <div class="flex items-center space-x-3 mb-1">
                        <h2 class="text-3xl font-bold text-slate-900">{{ $supply->name }}</h2>
                        <span class="px-2.5 py-1 bg-emerald-100 text-emerald-700 text-[10px] font-bold rounded-full">Active Partner</span>
                    </div>
                    <p class="text-xs text-slate-400 font-medium">ID: SUP-2024-00{{ $supply->id }}</p>
                </div>
                <button data-modal-target="open-modal" data-modal-toggle="open-modal" class="inline-flex items-center px-4 py-2.5 border border-slate-200 text-slate-600 text-xs font-bold rounded-xl hover:bg-slate-50 transition shadow-sm">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" /></svg>
                    Edit Supplier
                </button>
            </div>

            <!-- Info Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-slate-100 rounded-2xl overflow-hidden border border-slate-100">
                <div class="bg-white p-5 flex items-start space-x-4">
                    <div class="p-2.5 bg-slate-50 text-emerald-600 rounded-xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1">Primary Contact</p>
                        <p class="text-sm font-semibold text-slate-700">dummy@mail.com</p>
                    </div>
                </div>
                <div class="bg-white p-5 flex items-start space-x-4">
                    <div class="p-2.5 bg-slate-50 text-emerald-600 rounded-xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1">Location</p>
                        <p class="text-sm font-semibold text-slate-700">Java</p>
                    </div>
                </div>
                <div class="bg-white p-5 flex items-start space-x-4">
                    <div class="p-2.5 bg-slate-50 text-emerald-600 rounded-xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1">Certifications</p>
                        <p class="text-sm font-semibold text-slate-700">SPF No. 1/2</p>
                    </div>
                </div>
                <div class="bg-white p-5 flex items-start space-x-4">
                    <div class="p-2.5 bg-slate-50 text-emerald-600 rounded-xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1">Last Audit Date</p>
                        <p class="text-sm font-semibold text-slate-700">March 6, 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Header Actions -->
    <div class="flex flex-col md:flex-row md:items-center justify-between mb-6 space-y-4 md:space-y-0">
        <h3 class="text-xl font-bold text-slate-900">Associated Layups</h3>
        <div class="flex items-center space-x-3">
            <button class="px-4 py-2 bg-white border border-slate-200 text-slate-600 text-xs font-bold rounded-xl hover:bg-slate-50 transition shadow-sm flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0l-4 4m4-4v12" /></svg>
                Import
            </button>
            <button class="px-4 py-2 bg-white border border-slate-200 text-slate-600 text-xs font-bold rounded-xl hover:bg-slate-50 transition shadow-sm flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" /></svg>
                Export
            </button>
            <div x-data="{ showImportModal: @json(session('ready_import') || session('conflicts')) }">
                <button
                    type="button"
                    @click="showImportModal = true"
                    class="px-4 py-2 bg-emerald-700 hover:bg-emerald-800 text-white text-xs font-bold rounded-xl transition shadow-lg shadow-emerald-100 flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Add Layup
                </button>

                {{-- Modal --}}
               <div
    x-show="showImportModal"
    x-cloak
    x-data="{ fileName: null }"
    class="fixed inset-0 z-50 flex items-center justify-center bg-slate-900/40 backdrop-blur-sm"
>
    <div
        @click.away="showImportModal = false"
        class="relative w-full max-w-md p-4 transition-all duration-300"
    >
        <div class="relative bg-white rounded-3xl shadow-2xl overflow-hidden">

            {{-- CLOSE --}}
            <button
                type="button"
                @click="showImportModal = false"
                class="absolute top-6 right-6 text-slate-400 hover:bg-slate-100 hover:text-slate-900 rounded-xl text-sm w-9 h-9 inline-flex justify-center items-center transition-colors z-10"
            >
                ✕
            </button>

            {{-- FORM --}}
            <form
                action="{{ route('inventory.check') }}"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf

                {{-- HEADER --}}
                <div class="px-8 py-6 border-b border-slate-100 bg-slate-50/30">
                    <h2 class="text-xl font-bold text-slate-800">
                        Import Layup Data
                    </h2>
                </div>

                <div class="max-h-[65vh] overflow-y-auto p-8 space-y-6">

                    {{-- supplier --}}
                    <input type="hidden" name="supplier_id" value="{{ $supply->id }}">

                    {{-- layup name --}}
                    <div>
                        <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider pl-1 mb-2">
                            Layup Name
                        </label>
                        <input
                            type="text"
                            name="name"
                            required
                            placeholder="Ex: CLT-5-150-L"
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-emerald-500 outline-none"
                        >
                    </div>

                    {{-- upload --}}
                    <div class="relative group">
                        <input
                            type="file"
                            name="import_file"
                            accept=".csv,.json"
                            @change="fileName = $event.target.files[0]?.name"
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20"
                        >

                        <div
                            class="border-2 border-dashed p-8 rounded-2xl flex flex-col items-center justify-center text-center transition-all"
                            :class="fileName ? 'border-emerald-500 bg-emerald-50/30' : 'border-slate-200 bg-slate-50/50'"
                        >
                            <div
                                class="w-12 h-12 rounded-full flex items-center justify-center shadow-sm border mb-4"
                                :class="fileName ? 'bg-emerald-600 text-white' : 'bg-white text-emerald-600'"
                            >
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

                    {{-- submit muncul kalau file ada --}}
                    <div x-show="fileName" x-transition>
                        <button
                            type="submit"
                            class="w-full py-3 bg-emerald-700 hover:bg-emerald-800 text-white rounded-xl font-bold shadow-lg shadow-emerald-200"
                        >
                            Analyze Import
                        </button>
                    </div>

                    {{-- conflict --}}
                    @if(session('conflicts'))
                        <div class="p-4 bg-red-50 border border-red-100 rounded-2xl">
                            <p class="text-sm font-bold text-red-900">
                                Conflicts Detected
                            </p>
                            <p class="text-xs text-red-700 mt-1">
                                {{ count(session('conflicts')) }} conflicts found.
                            </p>
                        </div>
                    @endif

                    {{-- ready import --}}
                    @if(session('ready_import'))
                        <div class="p-4 bg-emerald-50 border border-emerald-200 rounded-2xl">
                            <p class="text-sm font-bold text-emerald-900">
                                Analysis Completed Successfully
                            </p>
                            <p class="text-xs text-emerald-700 mt-1">
                                Ready to import
                                <strong>{{ session('layup_name') }}</strong>
                            </p>
                        </div>
                    @endif
                </div>
            </form>

            {{-- confirm import OUTSIDE form utama --}}
            @if(session('ready_import'))
                <div class="px-8 pb-6">
                    <form action="{{ route('inventory.import.confirm') }}" method="POST">
                        @csrf
                        <button
                            type="submit"
                            class="w-full py-3 bg-emerald-700 hover:bg-emerald-800 text-white rounded-xl font-bold"
                        >
                            Confirm Import
                        </button>
                    </form>
                </div>
            @endif

        </div>
    </div>
</div>


</div>
        </div>
    </div>

    <!-- Layup Table -->
    <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-slate-50/50 border-b border-slate-200">
                        <th class="px-6 py-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest">Layup ID</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest">Name</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest text-center">Thickness</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest text-center">Ply Count</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest text-center">Status</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach ($layups as $layers)
                        <tr class="hover:bg-slate-50 transition-colors group">
                        <td class="px-6 py-5 text-xs font-medium text-slate-400">{{ $layers->id }}</td>
                        <td class="px-6 py-5 text-sm font-bold text-slate-800">{{ $layers->name }}</td>
                        <td class="px-6 py-5 text-sm text-slate-600 text-center font-medium">{{ $layers->layers->sum('thickness') }}</td>
                        <td class="px-6 py-5 text-center">
                            <span class="w-6 h-6 inline-flex items-center justify-center bg-slate-100 text-slate-700 text-[10px] font-bold rounded-lg border border-slate-200">{{ $layers->layers->sum('layers_order') }}</span>
                        </td>
                        <td class="px-6 py-5 text-center">
                            <span class="inline-flex items-center px-2.5 py-1 bg-emerald-50 text-emerald-600 text-[10px] font-bold rounded-full border border-emerald-100">
                                <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full mr-1.5"></span>
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-5 text-right">
                            <a href="{{ route('inventory.layers', $layers->id) }}" class="inline-flex items-center px-4 py-2 bg-slate-600 hover:bg-slate-700 text-white text-sm font-semibold rounded-xl shadow-lg transition-all active:scale-95">More</a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Footer Pagination -->
        <div class="px-6 py-4 bg-slate-50/50 border-t border-slate-200 flex items-center justify-between">
            <p class="text-[11px] text-slate-400 font-medium">Showing 3 of 12 layups</p>
            <div class="flex items-center space-x-1">
                <button class="p-1.5 text-slate-300 hover:text-emerald-600 transition disabled:opacity-50" disabled>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                </button>
                <button class="p-1.5 text-slate-300 hover:text-emerald-600 transition">
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
                <h3 class="text-xl font-bold text-slate-900">Edit Supplier</h3>
            </div>

            <form class="px-8 pb-8" id="formSupplier" method="POST" action="{{ route('supplier.edit', $supply->id) }}">
                @csrf
                @method('PUT')
                <div class="space-y-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider pl-1 mb-2">Supplier Name</label>
                        <input type="text" id="name" name="name" required value="{{ $supply->name }}"
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition text-slate-700">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3 mt-8">
                    <button data-modal-hide="open-modal" type="button" class="px-4 py-3 bg-slate-100 hover:bg-slate-200 text-slate-600 font-semibold rounded-2xl transition">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-2xl shadow-lg shadow-emerald-100 transition active:scale-95">
                        Edit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- <div id="open-modal-two" tabindex="-1"
    class="fixed inset-0 z-[100] hidden items-center justify-center bg-slate-900/40 backdrop-blur-sm transition-opacity duration-300 opacity-0"> --}}
<div
    id="open-modal-two"
    x-data="{ open: @json(session('ready_import') || session('conflicts')) }"
    x-on:open-import-modal.window="open = true"
    x-show="open"
    x-cloak
>

    <div
        @click.away="open = false"
        class="relative w-full max-w-md p-4"
    >
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">

            {{-- CLOSE --}}
            <button
                type="button"
                @click="open = false"
                class="absolute top-6 right-6 z-10 text-slate-400 hover:text-slate-700"
            >
                ✕
            </button>

            {{-- FORM ANALYZE --}}
            <form
                action="{{ route('inventory.check') }}"
                method="POST"
                enctype="multipart/form-data"
                x-data="{ fileName: null }"
            >
                @csrf

                <div class="px-8 py-6 border-b border-slate-100 bg-slate-50/30">
                    <h2 class="text-xl font-bold text-slate-800">
                        Import Layup Data
                    </h2>
                </div>

                <div class="max-h-[65vh] overflow-y-auto p-8 space-y-6">

                    {{-- supplier --}}
                    <input type="hidden" name="supplier_id" value="{{ $supply->id }}">

                    {{-- layup name --}}
                    <div>
                        <label class="block text-xs font-bold text-slate-400 uppercase mb-2">
                            Layup Name
                        </label>
                        <input
                            type="text"
                            name="name"
                            required
                            placeholder="Ex: CLT-5-150-L"
                            class="w-full px-4 py-3 bg-slate-50 border rounded-2xl"
                        >
                    </div>

                    {{-- upload --}}
                    <div class="relative">
                        <input
                            type="file"
                            name="import_file"
                            accept=".csv,.json"
                            @change="fileName = $event.target.files[0]?.name"
                            class="absolute inset-0 opacity-0 cursor-pointer z-20"
                        >

                        <div
                            class="border-2 border-dashed rounded-2xl p-8 text-center"
                            :class="fileName ? 'border-emerald-500 bg-emerald-50' : 'border-slate-200'"
                        >
                            <template x-if="!fileName">
                                <div>
                                    <p>Upload CSV / JSON</p>
                                </div>
                            </template>

                            <template x-if="fileName">
                                <div>
                                    <p class="font-bold text-emerald-700">Selected:</p>
                                    <p x-text="fileName"></p>
                                </div>
                            </template>
                        </div>
                    </div>

                    {{-- options muncul setelah upload --}}
                    <div x-show="fileName" x-transition>
                        <button
                            type="submit"
                            class="w-full py-3 bg-emerald-700 text-white rounded-xl font-bold"
                        >
                            Analyze Import
                        </button>
                    </div>

                    {{-- conflict alert --}}
                    @if(session('conflicts'))
                        <div class="p-4 bg-red-50 border border-red-200 rounded-xl">
                            <p class="font-bold text-red-700">
                                {{ count(session('conflicts')) }} conflicts detected
                            </p>
                        </div>
                    @endif

                    {{-- success analyze --}}
                    @if(session('ready_import'))
                        <div class="p-4 bg-emerald-50 border border-emerald-200 rounded-xl">
                            <p class="font-bold text-emerald-700">
                                Analysis Completed Successfully
                            </p>
                            <p class="text-sm mt-2">
                                Ready import:
                                <strong>{{ session('layup_name') }}</strong>
                            </p>

                            {{-- FORM CONFIRM (dipisah, jangan nested!) --}}
                            <div class="mt-4">
                                <form
                                    action="{{ route('inventory.import.confirm') }}"
                                    method="POST"
                                >
                                    @csrf
                                    <button
                                        type="submit"
                                        class="w-full py-3 bg-emerald-700 text-white rounded-xl font-bold"
                                    >
                                        Confirm Import
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endif

                </div>
            </form>

        </div>
    </div>
</div>

{{-- Modal 3 --}}
@php
    $conflicts = session('conflicts', []);
    $fileName = session('fileName', 'Unknown File');
    $totalConflicts = session('totalConflicts', 0);
    $activeConflict = $conflicts[0] ?? null;
@endphp

<div id="open-modal-three" tabindex="-1"
    class="fixed inset-0 z-[100] hidden items-center justify-center bg-slate-900/40 backdrop-blur-sm transition-opacity duration-300 opacity-100">

    <div class="bg-white w-full max-w-6xl rounded-[24px] shadow-2xl flex flex-col overflow-hidden h-[85vh]">

        {{-- HEADER --}}
        <div class="px-8 py-5 border-b border-slate-100 flex items-center justify-between bg-white">
            <div class="flex items-center space-x-3">
                <h1 class="text-xl font-bold text-slate-800">
                    Conflict Resolution: Import [{{ $fileName }}]
                </h1>
                <span
                    class="px-2.5 py-0.5 bg-orange-50 text-orange-600 text-[10px] font-bold rounded-full border border-orange-100 uppercase">
                    Needs Review
                </span>
            </div>
        </div>

        <div class="flex flex-1 overflow-hidden">

            {{-- SIDEBAR --}}
            <aside class="w-72 border-r border-slate-100 flex flex-col bg-slate-50/30">
                <div class="p-5 border-b border-slate-100 bg-white">
                    <p class="text-xs font-bold text-slate-500 uppercase tracking-widest">
                        Conflicts ({{ $totalConflicts }})
                    </p>
                </div>

                <div class="flex-1 overflow-y-auto p-4 space-y-3">
                    @foreach($conflicts as $index => $conflict)
                        <div
                            class="p-4 border rounded-xl {{ $index == 0 ? 'bg-emerald-50 border-emerald-200' : 'bg-white border-slate-200' }}">
                            <div class="flex justify-between items-start mb-1">
                                <p class="text-sm font-bold text-slate-700">
                                    Layer {{ $conflict['incoming']['layers_order'] }}
                                </p>
                                <div class="w-2 h-2 rounded-full bg-red-500"></div>
                            </div>
                            <p class="text-[11px] text-slate-400">
                                Data mismatch detected
                            </p>
                        </div>
                    @endforeach
                </div>
            </aside>

            {{-- MAIN --}}
            <main class="flex-1 p-8 overflow-y-auto bg-slate-50/50">
                @if($activeConflict)
                    <div class="mb-8">
                        <h2 class="text-lg font-bold text-slate-800">
                            Layer {{ $activeConflict['incoming']['layers_order'] }} Comparison
                        </h2>
                    </div>

                    <div class="grid grid-cols-2 gap-8">

                        {{-- EXISTING --}}
                        <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                            <div class="px-6 py-4 border-b font-bold text-slate-700">
                                Existing Version
                            </div>

                            <table class="w-full text-sm">
                                <thead class="bg-slate-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left">Order</th>
                                        <th class="px-6 py-3 text-left">Thickness</th>
                                        <th class="px-6 py-3 text-left">Width</th>
                                        <th class="px-6 py-3 text-left">Angle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-6 py-4">
                                            {{ $activeConflict['existing']->layers_order }}
                                        </td>
                                        <td class="px-6 py-4 text-red-600 font-bold">
                                            {{ $activeConflict['existing']->thickness }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $activeConflict['existing']->width }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $activeConflict['existing']->angle }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="p-6 border-t">
                                <form action="{{ route('inventory.conflict-resolve') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="action" value="keep_existing">

                                    <button type="submit"
                                        class="w-full py-2.5 px-4 bg-white border border-emerald-600 text-emerald-700 text-xs font-bold rounded-xl hover:bg-emerald-50 transition">
                                        Keep Existing
                                    </button>
                                </form>
                            </div>
                        </div>

                        {{-- INCOMING --}}
                        <div class="bg-white rounded-2xl border-2 border-emerald-500 overflow-hidden shadow-lg">
                            <table class="w-full text-sm">
                                <thead class="bg-slate-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left">Order</th>
                                        <th class="px-6 py-3 text-left">Thickness</th>
                                        <th class="px-6 py-3 text-left">Width</th>
                                        <th class="px-6 py-3 text-left">Angle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-red-50">
                                        <td class="px-6 py-4">
                                            {{ $activeConflict['incoming']['layers_order'] }}
                                        </td>
                                        <td class="px-6 py-4 text-red-600 font-bold">
                                            {{ $activeConflict['incoming']['thickness'] }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $activeConflict['incoming']['width'] }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $activeConflict['incoming']['angle'] }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="p-6 border-t">
                                <form action="{{ route('inventory.conflict-resolve') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="action" value="accept_incoming">

                                    <button type="submit"
                                        class="w-full py-2.5 px-4 bg-emerald-700 text-white text-xs font-bold rounded-xl hover:bg-emerald-800 transition">
                                        Accept Incoming
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            </main>
        </div>

        {{-- FOOTER --}}
        <div class="px-8 py-5 border-t flex justify-between items-center bg-white">
            <button class="px-6 py-2 border rounded-xl text-sm font-bold text-slate-500">
                Cancel Import
            </button>

            <p class="text-xs font-bold text-slate-700">
                1 of {{ $totalConflicts }} Discrepancies
            </p>
        </div>
    </div>
</div>

@if(session('open-modal-three'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('open-modal-three');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
</script>
@endif
@endsection
