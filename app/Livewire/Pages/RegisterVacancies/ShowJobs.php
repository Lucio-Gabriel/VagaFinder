<?php

namespace App\Livewire\Pages\RegisterVacancies;

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ShowJobs extends Component
{
    #[Computed]
    public function vacancies(): Collection
    {
        return Vacancy::get();
    }

    public function render():View
    {
        return view('livewire.pages.register-vacancies.show-jobs');
    }
}
