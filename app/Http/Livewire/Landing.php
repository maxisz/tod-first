<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Landing extends Component
{
    public $session_code;
    protected $rules = [
        'session_code' => 'required|min:6',
    ];

    public function join()
    {
        $this->validate();
    }
    public function render()
    {
        return view('livewire.landing');
    }
}
