
<!-- Header / Navigasi Atas -->
    <header class="sticky top-0 z-50 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo & Brand -->
                <div class="flex items-center space-x-3">
                    <div class="bg-emerald-600 p-2 rounded-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold tracking-tight text-slate-800">Test<span class="text-emerald-600">Toolbox</span></h1>
                        <p class="text-[10px] uppercase tracking-widest text-slate-400 font-semibold">Material Control</p>
                    </div>
                </div>

                <!-- Menu Navigasi Tengah -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-sm font-medium text-slate-500 hover:text-emerald-600 transition">Overview</a>
                    <a href="{{ route('supplier.index') }}" class="text-sm {{ request()->routeIs('supplier.*') ? 'font-semibold text-emerald-600 border-b-2 border-emerald-600 pb-7 -mb-7' : 'font-medium text-slate-500 hover:text-emerald-600 transition' }}">Supplier</a>
                    <a href="{{ route('inventory.index') }}" class="text-sm {{ request()->routeIs('inventory.*') ? 'font-semibold text-emerald-600 border-b-2 border-emerald-600 pb-7 -mb-7' : 'font-medium text-slate-500 hover:text-emerald-600 transition' }}">Inventory</a>
                    <a href="#" class="text-sm font-medium text-slate-500 hover:text-emerald-600 transition">Setting</a>
                </nav>

                <!-- Profil & Notifikasi -->
                <div class="flex items-center space-x-5">
                    <button class="relative p-2 text-slate-400 hover:text-emerald-600 transition">
                        <span class="absolute top-2 right-2 w-2 h-2 bg-rose-500 rounded-full border-2 border-white"></span>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>
                    <div class="flex items-center space-x-3 pl-4 border-l border-slate-200 text-right">
                        <div class="hidden sm:block">
                            <p class="text-sm font-bold text-slate-800 leading-none">Chikal Lyra</p>
                            <p class="text-[11px] text-slate-500 mt-1">Candidate</p>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-slate-200 border-2 border-white overflow-hidden">
                            <img src="https://ui-avatars.com/api/?name=Chikal+Lyra&background=10b981&color=fff" alt="Avatar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
