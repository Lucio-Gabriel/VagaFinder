<?php

namespace App\Livewire\Pages\RegisterVacancies;

use Livewire\Component;

class RegisterVacancies extends Component
{
    public function render()
    {
        return view('livewire.pages.register-vacancies.register-vacancies')
            ->layout('layouts.app');
    }
}
