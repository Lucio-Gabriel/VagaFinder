 <div class="bg-gray-100 flex flex-wrap items-center justify-center gap-5 mb-10">
     @foreach($this->vacancies as $vacancy)
     <div class="bg-white basis-1/3 py-20 px-5 shadow-sm rounded-lg hover:bg-[#D3D8F8] duration-300">
            <div class="flex items-start justify-start -mt-12 mb-3">
                <img
                    src="/images/job.png"
                    alt="Jobs"
                    class="rounded-full w-20 h-20 "
                />

                <h1 class="pt-6 pl-2 text-2xl font-semibold">
                    {{ $vacancy->title }}
                </h1>

                <div class="flex items-end justify-end gap-3 pl-64">
                    <button
                        x-on:click="Livewire.navigate('{{ route('vacancies.edit', $vacancy)  }}')"
                    >
                        edit
                    </button>

                    <button>
                        delete
                    </button>
                </div>
            </div>
            <div class="flex items-start justify-start gap-2 pl-2">
                <div class="bg-[#D3D8F8] text-[#2541E2] font-semibold py-2 px-2 -mb-28 rounded-lg">
                    {{ $vacancy->stacks  }}
                </div>
            </div>
            <div class="max-w-md mt-14">
                <p class="text-gray-400 font-medium text-start pl-2">
                    {{ $vacancy->description  }}
                </p>
            </div>
            <div class="mt-10">
                <hr/>
                <div class="flex items-start justify-start pt-3">
                    <span class="text-2xl font-semi">$</span>
                    <h1 class="text-2xl font-semi">{{ $vacancy->wage  }}</h1>
                    <span class="text-2xl font-semi text-gray-400">/hr</span>
                </div>
            </div>
        </div>
     @endforeach
 </div>
