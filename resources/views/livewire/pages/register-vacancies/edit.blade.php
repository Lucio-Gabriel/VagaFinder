<div>
    <div>
        <div class="bg-gray-100 py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                <div class="text-center font-semibold text-2xl p-6 pl-12 text-gray-600">
                    Editar Vagas
                </div>
            </div>
        </div>

        <div class="bg-gray-100 flex flex-wrap items-center justify-center gap-5 mt-20">
            <form wire:submit="save" class="max-w-sm mx-auto ">
                <div class="mb-5">
                    <label for="text" class="block mb-2 text-xl font-medium text-gray-600 dark:text-black">Titulo</label>
                    <input type="text" wire:model="title" id="text" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                    <div>
                        @error('title') <span class="error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="mb-5">
                    <label for="text" class="block mb-2 text-xl font-medium text-gray-600 dark:text-black">Stacks</label>
                    <input type="text" wire:model="stacks" id="text" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                    <div>
                        @error('stacks') <span class="error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="mb-5">
                    <label for="text" class="block mb-2 text-xl font-medium text-gray-900 dark:text-black">Descrição</label>
                    <textarea id="text" wire:model="description" rows="4" class="block p-2.5 px-16 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" ></textarea>
                    <div>
                        @error('description') <span class="error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="mb-5">
                    <label for="number" class="block mb-2 text-xl font-medium text-gray-600 dark:text-black">Salario</label>
                    <input type="number" wire:model="wage" id="number" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                    <div>
                        @error('stacks') <span class="error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <button type="submit"
                        class="text-white bg-[#2541E2] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Cadastrar vaga
                </button>
            </form>
        </div>
    </div>

</div>
