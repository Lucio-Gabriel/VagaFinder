<?php

namespace App\Livewire\Pages\RegisterVacancies;

use App\Models\Vacancy;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public Vacancy $vacancy;
    #[Validate('required')]
    public $title;

    #[Validate('required')]
    public $stacks;

    #[Validate('required')]
    public $description;

    #[Validate('required')]
    public $wage;
    public function mount()
    {
        $this->title = $this->vacancy->title;
        $this->stacks = $this->vacancy->stacks;
        $this->description = $this->vacancy->description;
        $this->wage = $this->vacancy->wage;
    }

    public function save()
    {
        $this->validate();

        $this->vacancy->update([
            'title' => $this->title,
            'stacks' => $this->stacks,
            'description' => $this->description,
            'wage' => $this->wage,
        ]);

        $this->redirect(route('dashboard'));
    }
    public function render():View
    {
        return view('livewire.pages.register-vacancies.edit')
            ->layout('layouts.app');
    }
}
