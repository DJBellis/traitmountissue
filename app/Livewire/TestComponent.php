<?php

namespace App\Livewire;

use App\Traits\TestTrait;
use Livewire\Component;

class TestComponent extends Component
{
    use TestTrait;
    public ?string $optional;
    public string $required;

    public function mount(string $required, ?string $optional = null): void
    {
        $this->required = $required;
        $this->optional = $optional;
    }

    public function render()
    {
        return view('livewire.test-component');
    }
}
