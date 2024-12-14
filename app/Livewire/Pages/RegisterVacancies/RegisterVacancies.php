<?php

namespace App\Livewire\Pages\RegisterVacancies;


use App\Models\Vacancy;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RegisterVacancies extends Component
{
    #[Validate('required')]
    public $title = '';
    #[Validate('required')]
    public $stacks = '';
    #[Validate('required')]
    public $description = '';

    #[Validate('required')]
    public $wage = '';

    public function save()
    {
        $this->validate();

        Vacancy::create(
            $this->only(['title', 'stacks', 'description', 'wage'])
        );

        session()->flash('status', 'Vaga cadastrada com sucesso');

        return $this->redirect('dashboard');
    }

    public function render():View
    {
        return view('livewire.pages.register-vacancies.register-vacancies')
            ->layout('layouts.app');
    }
}
