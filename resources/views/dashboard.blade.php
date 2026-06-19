<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row gap-6">

                {{-- SIDEBAR --}}
                <div class="w-full md:w-64 flex-shrink-0">
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg overflow-hidden">
                        <nav class="p-4 space-y-1">

                            <a href="#"
                                class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium bg-indigo-50 text-indigo-700 dark:bg-indigo-900/40 dark:text-indigo-300">
                                Dashboard
                            </a>

                            <a href="#"
                                class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                Ruangan
                            </a>

                            <a href="#"
                                class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                Pembayaran
                            </a>

                            <a href="#"
                                class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                Laporan
                            </a>

                            <a href="#"
                                class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                Komplain
                            </a>

                        </nav>
                    </div>
                </div>

                {{-- MAIN CONTENT --}}
                <div class="flex-1">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">

                            <p class="mb-4">You're logged in!</p>

                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-6">

                                <div class="bg-indigo-50 dark:bg-indigo-900/30 rounded-lg p-4">
                                    <p class="text-sm text-indigo-600 dark:text-indigo-300">Ruangan Tersedia</p>
                                    <p class="text-2xl font-bold text-indigo-800 dark:text-indigo-200">--</p>
                                </div>

                                <div class="bg-green-50 dark:bg-green-900/30 rounded-lg p-4">
                                    <p class="text-sm text-green-600 dark:text-green-300">Pembayaran Sukses</p>
                                    <p class="text-2xl font-bold text-green-800 dark:text-green-200">--</p>
                                </div>

                                <div class="bg-yellow-50 dark:bg-yellow-900/30 rounded-lg p-4">
                                    <p class="text-sm text-yellow-600 dark:text-yellow-300">Laporan Bulan Ini</p>
                                    <p class="text-2xl font-bold text-yellow-800 dark:text-yellow-200">--</p>
                                </div>

                                <div class="bg-red-50 dark:bg-red-900/30 rounded-lg p-4">
                                    <p class="text-sm text-red-600 dark:text-red-300">Komplain Aktif</p>
                                    <p class="text-2xl font-bold text-red-800 dark:text-red-200">--</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>