<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Empregos recomendados
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap items-center justify-center gap-5">
        <div class="bg-white basis-1/3 py-20 px-5 shadow-sm rounded-lg hover:bg-gray-400 duration-300">
            <div class="flex items-start justify-start -mt-12 mb-12">
                <img
                    src="/images/job.png"
                    alt="Jobs"
                    class="rounded-full w-20 h-20 "
                />

                <h1 class="pt-6 pl-2 text-xl font-medium">
                    Titulo da vaga
                </h1>
            </div>
            <div class="flex items-start justify-start gap-2 pl-2">
                <div class="bg-blue-500 text-white py-2 px-2 rounded-md">
                    conteudo
                </div>

                <div class="bg-blue-500 text-white py-2 px-2 rounded-md">
                    conteudo
                </div>

                <div class="bg-blue-500 text-white py-2 px-2 rounded-md">
                    conteudo
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
