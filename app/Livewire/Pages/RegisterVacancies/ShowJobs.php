<?php

namespace App\Livewire\Pages\RegisterVacancies;

use App\Models\Vacancy;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ShowJobs extends Component
{
//    public $title;
//    public $stacks;
//    public $description;

    public $Id;

    #[Computed]
    public function vacancies()
    {
        return Vacancy::find($this->Id);
    }

    public function render():View
    {
        return view('livewire.pages.register-vacancies.show-jobs');
    }
}
