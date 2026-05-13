{{-- @extends('layouts.app')

@section('content')
<!-- Breadcrumbs & Actions -->
<div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
    <nav class="flex text-xs font-medium text-slate-400 space-x-2">
        <a href="#" class="hover:text-emerald-600 transition">Home</a>
        <span>&rsaquo;</span>
        <a href="#" class="hover:text-emerald-600 transition">Suppliers</a>
        <span>&rsaquo;</span>
        <a href="#" class="hover:text-emerald-600 transition">Layups</a>
        <span>&rsaquo;</span>
        <span class="text-slate-600 font-bold">L-2023-X</span>
    </nav>
    <div class="flex items-center space-x-3">
        <button class="px-4 py-2 bg-white border border-slate-200 text-slate-600 text-xs font-bold rounded-xl hover:bg-slate-50 transition shadow-sm flex items-center">
            <svg class="w-3.5 h-3.5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" /></svg>
            Duplicate
        </button>
        <button class="px-5 py-2.5 bg-emerald-700 hover:bg-emerald-800 text-white text-xs font-bold rounded-xl transition shadow-lg shadow-emerald-100 flex items-center">
            <svg class="w-3.5 h-3.5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
            Save Changes
        </button>
    </div>
</div>

<!-- Layup Specification Card -->
<div class="bg-white rounded-[24px] border border-slate-200 shadow-sm p-8 mb-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        <!-- Left: Title & Description -->
        <div class="lg:col-span-5 border-r border-slate-100 pr-8">
            <div class="flex items-center space-x-3 mb-2">
                <h1 class="serif-title text-2xl font-bold text-slate-900">Layup Specification: L-2023-X</h1>
                <span class="px-2 py-0.5 bg-emerald-50 text-emerald-600 text-[10px] font-bold rounded-full border border-emerald-100 uppercase">Active</span>
            </div>
            <p class="text-sm text-slate-400">Standard 5-layer panel for residential structural walls.</p>
        </div>

        <!-- Right: Metadata Grid -->
        <div class="lg:col-span-7 grid grid-cols-2 md:grid-cols-4 gap-6">
            <div>
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Created By</p>
                <p class="text-sm font-semibold text-slate-700">Eng. Dept A</p>
            </div>
            <div>
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Last Modified</p>
                <p class="text-sm font-semibold text-slate-700">Oct 24, 2023</p>
            </div>
            <div>
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Total Thickness</p>
                <p class="text-xl font-bold text-emerald-600">140mm</p>
            </div>
            <div>
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Total Layers</p>
                <p class="text-xl font-bold text-emerald-600">5 Layers</p>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

    <!-- Layer Composition Table -->
    <div class="space-y-4">
        <div class="flex items-center justify-between">
            <h2 class="text-lg font-bold text-slate-800">Layer Composition</h2>
            <button class="text-emerald-600 text-xs font-bold hover:text-emerald-700 flex items-center">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                Add Layer
            </button>
        </div>

        <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
            <table class="w-full text-left">
                <thead class="bg-slate-50/50 border-b border-slate-200">
                    <tr>
                        <th class="px-4 py-3 text-[10px] font-bold text-slate-400 uppercase tracking-wider">Order</th>
                        <th class="px-4 py-3 text-[10px] font-bold text-slate-400 uppercase tracking-wider">Thickness</th>
                        <th class="px-4 py-3 text-[10px] font-bold text-slate-400 uppercase tracking-wider text-center">Angle</th>
                        <th class="px-4 py-3 text-[10px] font-bold text-slate-400 uppercase tracking-wider">Grade</th>
                        <th class="px-4 py-3 text-[10px] font-bold text-slate-400 uppercase tracking-wider text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <!-- Layer 1 -->
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-4 py-4"><div class="w-6 h-6 bg-slate-100 rounded flex items-center justify-center text-[10px] font-bold text-slate-500 border border-slate-200">1</div></td>
                        <td class="px-4 py-4 text-sm font-semibold text-slate-700">40mm</td>
                        <td class="px-4 py-4 flex justify-center">
                            <span class="inline-flex items-center px-2 py-1 bg-slate-100 text-slate-600 text-[10px] font-bold rounded border border-slate-200">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg> 0°
                            </span>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex items-center"><span class="w-2 h-2 rounded-full bg-emerald-500 mr-2"></span> <span class="text-xs font-medium text-slate-600">C24</span></div>
                        </td>
                        <td class="px-4 py-4 text-right">
                            <button class="text-slate-300 hover:text-slate-500 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" /></svg></button>
                        </td>
                    </tr>
                    <!-- Layer 2 -->
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-4 py-4"><div class="w-6 h-6 bg-slate-100 rounded flex items-center justify-center text-[10px] font-bold text-slate-500 border border-slate-200">2</div></td>
                        <td class="px-4 py-4 text-sm font-semibold text-slate-700">20mm</td>
                        <td class="px-4 py-4 flex justify-center">
                            <span class="inline-flex items-center px-2 py-1 bg-amber-50 text-amber-700 text-[10px] font-bold rounded border border-amber-100">
                                <svg class="w-3 h-3 mr-1 rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg> 90°
                            </span>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex items-center"><span class="w-2 h-2 rounded-full bg-amber-500 mr-2"></span> <span class="text-xs font-medium text-slate-600">C16</span></div>
                        </td>
                        <td class="px-4 py-4 text-right">
                            <button class="text-slate-300 hover:text-slate-500 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" /></svg></button>
                        </td>
                    </tr>
                    <!-- Layer 3 -->
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-4 py-4"><div class="w-6 h-6 bg-slate-100 rounded flex items-center justify-center text-[10px] font-bold text-slate-500 border border-slate-200">3</div></td>
                        <td class="px-4 py-4 text-sm font-semibold text-slate-700">40mm</td>
                        <td class="px-4 py-4 flex justify-center">
                            <span class="inline-flex items-center px-2 py-1 bg-slate-100 text-slate-600 text-[10px] font-bold rounded border border-slate-200">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg> 0°
                            </span>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex items-center"><span class="w-2 h-2 rounded-full bg-emerald-500 mr-2"></span> <span class="text-xs font-medium text-slate-600">C24</span></div>
                        </td>
                        <td class="px-4 py-4 text-right">
                            <button class="text-slate-300 hover:text-slate-500 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" /></svg></button>
                        </td>
                    </tr>
                    <!-- Layer 4 -->
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-4 py-4"><div class="w-6 h-6 bg-slate-100 rounded flex items-center justify-center text-[10px] font-bold text-slate-500 border border-slate-200">4</div></td>
                        <td class="px-4 py-4 text-sm font-semibold text-slate-700">20mm</td>
                        <td class="px-4 py-4 flex justify-center">
                            <span class="inline-flex items-center px-2 py-1 bg-amber-50 text-amber-700 text-[10px] font-bold rounded border border-amber-100">
                                <svg class="w-3 h-3 mr-1 rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg> 90°
                            </span>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex items-center"><span class="w-2 h-2 rounded-full bg-amber-500 mr-2"></span> <span class="text-xs font-medium text-slate-600">C16</span></div>
                        </td>
                        <td class="px-4 py-4 text-right">
                            <button class="text-slate-300 hover:text-slate-500 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" /></svg></button>
                        </td>
                    </tr>
                    <!-- Layer 5 -->
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-4 py-4"><div class="w-6 h-6 bg-slate-100 rounded flex items-center justify-center text-[10px] font-bold text-slate-500 border border-slate-200">5</div></td>
                        <td class="px-4 py-4 text-sm font-semibold text-slate-700">40mm</td>
                        <td class="px-4 py-4 flex justify-center">
                            <span class="inline-flex items-center px-2 py-1 bg-slate-100 text-slate-600 text-[10px] font-bold rounded border border-slate-200">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg> 0°
                            </span>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex items-center"><span class="w-2 h-2 rounded-full bg-emerald-500 mr-2"></span> <span class="text-xs font-medium text-slate-600">C24</span></div>
                        </td>
                        <td class="px-4 py-4 text-right">
                            <button class="text-slate-300 hover:text-slate-500 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" /></svg></button>
                        </td>
                    </tr>
                </tbody>
                <tfoot class="bg-slate-50/30 border-t border-slate-100">
                    <tr>
                        <td colspan="3" class="px-4 py-3">
                            <p class="text-[10px] text-slate-400 font-medium italic">Showing 5 layers</p>
                        </td>
                        <td colspan="2" class="px-4 py-3 text-right">
                            <p class="text-[11px] text-slate-500 font-bold">Calculated Sum: <span class="text-emerald-700">140.00 mm</span></p>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Engineering Note -->
        <div class="bg-amber-50 border border-amber-100 rounded-2xl p-4 flex items-start space-x-3">
            <div class="p-1.5 bg-amber-100 text-amber-700 rounded-lg">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            </div>
            <div>
                <p class="text-xs font-bold text-amber-900 mb-1">Engineering Note</p>
                <p class="text-[11px] text-amber-800 leading-relaxed">Ensure bonding pressure is adjusted for varying layer grades (C24/C16 mix). Verify alignment of 90° transverse layers.</p>
            </div>
        </div>
    </div>

    <!-- Structure Visualizer -->
    <div class="space-y-4">
        <div class="flex items-center justify-between">
            <h2 class="text-lg font-bold text-slate-800">Structure Visualizer</h2>
            <div class="flex items-center space-x-4">
                <div class="flex items-center text-[10px] font-bold text-slate-400 uppercase tracking-tighter">
                    <span class="w-2 h-2 bg-amber-200 border border-amber-300 rounded-sm mr-2"></span> Longitudinal (0°)
                </div>
                <div class="flex items-center text-[10px] font-bold text-slate-400 uppercase tracking-tighter">
                    <span class="w-2 h-2 bg-amber-400 border border-amber-500 rounded-sm mr-2"></span> Transverse (90°)
                </div>
            </div>
        </div>

        <div class="bg-white rounded-[32px] border border-slate-200 shadow-sm p-12 flex flex-col items-center justify-center relative min-h-[500px]">
            <!-- Labels -->
            <div class="absolute top-10 left-10 flex flex-col items-center">
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Top</span>
                <span class="text-[9px] text-slate-300 font-medium">(Outside)</span>
                <div class="h-12 w-px bg-slate-200 mt-2"></div>
            </div>

            <div class="absolute bottom-10 left-10 flex flex-col items-center">
                <div class="h-12 w-px bg-slate-200 mb-2"></div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Bottom</span>
                <span class="text-[9px] text-slate-300 font-medium">(Inside)</span>
            </div>

            <!-- Visual Stack -->
            <div class="flex flex-col space-y-2 w-full max-w-[280px] perspective-1000">
                <!-- Layer 1 -->
                <div class="visualizer-layer h-[60px] bg-amber-200 border-2 border-amber-300 rounded-xl shadow-md flex items-center justify-between px-6 transform transition-transform hover:-translate-y-1">
                    <span class="text-xs font-bold text-amber-800">L1 (40mm)</span>
                    <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg>
                </div>
                <!-- Layer 2 -->
                <div class="visualizer-layer h-[35px] bg-amber-400 border-2 border-amber-500 rounded-xl shadow-md flex items-center justify-between px-6 transform transition-transform hover:-translate-y-1">
                    <span class="text-xs font-bold text-amber-900">L2 (20mm)</span>
                    <svg class="w-4 h-4 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" /></svg>
                </div>
                <!-- Layer 3 -->
                <div class="visualizer-layer h-[60px] bg-amber-200 border-2 border-amber-300 rounded-xl shadow-md flex items-center justify-between px-6 transform transition-transform hover:-translate-y-1">
                    <span class="text-xs font-bold text-amber-800">L3 (40mm)</span>
                    <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg>
                </div>
                <!-- Layer 4 -->
                <div class="visualizer-layer h-[35px] bg-amber-400 border-2 border-amber-500 rounded-xl shadow-md flex items-center justify-between px-6 transform transition-transform hover:-translate-y-1">
                    <span class="text-xs font-bold text-amber-900">L4 (20mm)</span>
                    <svg class="w-4 h-4 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" /></svg>
                </div>
                <!-- Layer 5 -->
                <div class="visualizer-layer h-[60px] bg-amber-200 border-2 border-amber-300 rounded-xl shadow-md flex items-center justify-between px-6 transform transition-transform hover:-translate-y-1">
                    <span class="text-xs font-bold text-amber-800">L5 (40mm)</span>
                    <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg>
                </div>
            </div>

            <!-- Footer Caption -->
            <div class="mt-16 text-center">
                <p class="text-xs font-bold text-slate-800 mb-1">Cross-Laminated Structural Assembly</p>
                <p class="text-[10px] text-slate-400 italic">Note: 3D orientation is for schematic purposes. All layers bonded with industrial-grade adhesives.</p>
            </div>
        </div>
    </div>

</div>
@endsection --}}

@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
    <nav class="flex text-xs font-medium text-slate-400 space-x-2">
        <a href="#" class="hover:text-emerald-600 transition">Home</a>
        <span>&rsaquo;</span>
        <a href="#" class="hover:text-emerald-600 transition">Suppliers</a>
        <span>&rsaquo;</span>
        <a href="#" class="hover:text-emerald-600 transition">Layups</a>
        <span>&rsaquo;</span>
        <span class="text-slate-600 font-bold">{{ $layup->name }}</span>
    </nav>

    <div class="flex items-center space-x-3">
        <button class="px-4 py-2 bg-white border border-slate-200 text-slate-600 text-xs font-bold rounded-xl hover:bg-slate-50 transition shadow-sm flex items-center">
            <svg class="w-3.5 h-3.5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
            </svg>
            Duplicate
        </button>

        <button class="px-5 py-2.5 bg-emerald-700 hover:bg-emerald-800 text-white text-xs font-bold rounded-xl transition shadow-lg shadow-emerald-100 flex items-center">
            <svg class="w-3.5 h-3.5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 13l4 4L19 7" />
            </svg>
            Save Changes
        </button>
    </div>
</div>

<div class="bg-white rounded-[24px] border border-slate-200 shadow-sm p-8 mb-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        <div class="lg:col-span-5 border-r border-slate-100 pr-8">
            <div class="flex items-center space-x-3 mb-2">
                <h1 class="serif-title text-2xl font-bold text-slate-900">
                    Layup Specification: {{ $layup->name }}
                </h1>

                <span
                    class="px-2 py-0.5 bg-emerald-50 text-emerald-600 text-[10px] font-bold rounded-full border border-emerald-100 uppercase">
                    Active
                </span>
            </div>

            <p class="text-sm text-slate-400">
                Standard {{ $layup->layers->count() }}-layer panel.
            </p>
        </div>

        <div class="lg:col-span-7 grid grid-cols-2 md:grid-cols-4 gap-6">
            <div>
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Created By</p>
                <p class="text-sm font-semibold text-slate-700">Engineering Team</p>
            </div>

            <div>
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Last Modified</p>
                <p class="text-sm font-semibold text-slate-700">
                    {{ $layup->updated_at->format('M d, Y') }}
                </p>
            </div>

            <div>
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Total Thickness</p>
                <p class="text-xl font-bold text-emerald-600">
                    {{ $layup->layers->sum('thickness') }}mm
                </p>
            </div>

            <div>
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Total Layers</p>
                <p class="text-xl font-bold text-emerald-600">
                    {{ $layup->layers->count() }} Layers
                </p>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

    {{-- TABLE --}}
    <div class="space-y-4">
        <div class="flex items-center justify-between">
            <h2 class="text-lg font-bold text-slate-800">Layer Composition</h2>
        </div>

        <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
            <table class="w-full text-left">
                <thead class="bg-slate-50/50 border-b border-slate-200">
                    <tr>
                        <th class="px-4 py-3 text-[10px] font-bold text-slate-400 uppercase">Order</th>
                        <th class="px-4 py-3 text-[10px] font-bold text-slate-400 uppercase">Thickness</th>
                        <th class="px-4 py-3 text-[10px] font-bold text-slate-400 uppercase text-center">Angle</th>
                        <th class="px-4 py-3 text-[10px] font-bold text-slate-400 uppercase">Width</th>
                        <th class="px-4 py-3 text-[10px] font-bold text-slate-400 uppercase text-right">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100">
                    @foreach($layup->layers as $layer)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-4 py-4">
                            <div class="w-6 h-6 bg-slate-100 rounded flex items-center justify-center text-[10px] font-bold text-slate-500 border border-slate-200">
                                {{ $layer->layers_order }}
                            </div>
                        </td>

                        <td class="px-4 py-4 text-sm font-semibold text-slate-700">
                            {{ $layer->thickness }}mm
                        </td>

                        <td class="px-4 py-4 flex justify-center">
                            <span class="inline-flex items-center px-2 py-1 rounded border text-[10px] font-bold
                                {{ $layer->angle == 90
                                    ? 'bg-amber-50 text-amber-700 border-amber-100'
                                    : 'bg-slate-100 text-slate-600 border-slate-200' }}">
                                {{ $layer->angle }}°
                            </span>
                        </td>

                        <td class="px-4 py-4 text-sm text-slate-600">
                            {{ $layer->width }}
                        </td>

                        <td class="px-4 py-4 text-right">
                            <button class="text-slate-300 hover:text-slate-500 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 5v.01M12 12v.01M12 19v.01" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

                <tfoot class="bg-slate-50/30 border-t border-slate-100">
                    <tr>
                        <td colspan="3" class="px-4 py-3">
                            <p class="text-[10px] text-slate-400 font-medium italic">
                                Showing {{ $layup->layers->count() }} layers
                            </p>
                        </td>
                        <td colspan="2" class="px-4 py-3 text-right">
                            <p class="text-[11px] text-slate-500 font-bold">
                                Calculated Sum:
                                <span class="text-emerald-700">
                                    {{ number_format($layup->layers->sum('thickness'), 2) }} mm
                                </span>
                            </p>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    {{-- VISUALIZER --}}
    <div class="space-y-4">
        <h2 class="text-lg font-bold text-slate-800">Structure Visualizer</h2>

        <div class="bg-white rounded-[32px] border border-slate-200 shadow-sm p-12 flex flex-col items-center justify-center relative min-h-[500px]">

            <div class="flex flex-col space-y-2 w-full max-w-[280px]">
                @foreach($layup->layers as $layer)
                <div class="
                    visualizer-layer
                    rounded-xl shadow-md flex items-center justify-between px-6
                    {{ $layer->angle == 90
                        ? 'bg-amber-400 border-2 border-amber-500 h-[35px]'
                        : 'bg-amber-200 border-2 border-amber-300 h-[60px]' }}
                ">
                    <span class="text-xs font-bold text-amber-900">
                        L{{ $layer->layers_order }} ({{ $layer->thickness }}mm)
                    </span>

                    <span class="text-xs font-bold text-amber-800">
                        {{ $layer->angle }}°
                    </span>
                </div>
                @endforeach
            </div>

            <div class="mt-16 text-center">
                <p class="text-xs font-bold text-slate-800 mb-1">
                    Cross-Laminated Structural Assembly
                </p>
                <p class="text-[10px] text-slate-400 italic">
                    Generated from layup database
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
