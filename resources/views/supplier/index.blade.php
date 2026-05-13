@extends('layouts.app')

@section('title', 'Supplier')
@section('content')
<!-- Header Halaman -->
    <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 space-y-4 md:space-y-0">
        <div>
            <h2 class="text-3xl font-bold text-slate-900">List Suppliers</h2>
        </div>
        <button data-modal-target="open-modal" data-modal-toggle="open-modal" class="inline-flex items-center px-5 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold rounded-xl shadow-lg transition-all active:scale-95">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            Add New Supplier
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
            <input type="text" placeholder="Search Supplier by name or ID..." class="w-full pl-11 pr-4 py-3 bg-white border border-slate-200 rounded-2xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition shadow-sm">
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
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Total Layups</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-center">Created At</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-right">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <!-- Baris 1 -->
                    @foreach ($supplier as $supply)
                        <tr class="hover:bg-slate-50 transition-colors group">
                            <td class="px-6 py-5">
                                <div class="flex items-center space-x-4">
                                    <div class="w-11 h-11 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-sm">NT</div>
                                    <div>
                                        <p class="font-bold text-slate-900 leading-none">{{ $supply->name }}</p>
                                        <p class="text-xs text-slate-400 mt-1">ID: {{ $supply->id }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-5 text-center font-semibold text-slate-700">{{ $supply->layups->count('id') }}</td>
                            <td class="px-6 py-5 text-sm text-slate-500">{{ $supply->created_at->format('Y-m-d') }}</td>
                            <td class="px-6 py-5">
                                <span class="px-3 py-1 bg-emerald-100 text-emerald-700 text-[11px] font-bold rounded-full">Aktif</span>
                            </td>
                            <td class="px-6 py-5 text-right">
                                <a href="{{ route('supplier.layups', $supply->id) }}" class="inline-flex items-center px-4 py-2 bg-slate-600 hover:bg-slate-700 text-white text-sm font-semibold rounded-xl shadow-lg transition-all active:scale-95">
                                    Detail
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Footer Tabel / Paginasi -->
        <div class="px-6 py-4 bg-slate-50/50 border-t border-slate-200 flex items-center justify-between">
            <p class="text-xs text-slate-500 font-medium">
                Show <span class="text-slate-900">1</span> to <span class="text-slate-900">5</span> from <span class="text-slate-900">60</span> data Supplier
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

            <form class="px-8 pb-8" id="formSupplier" method="POST" action="{{ route('supplier.create') }}">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider pl-1 mb-2">Supplier Name</label>
                        <input type="text" name="name" id="supplier_name" required placeholder="Ex: PT. Kayu Maju"
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
@endsection
