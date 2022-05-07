<?php

namespace Luanardev\LivewireModal;

use Livewire\Component;

class LivewireModal extends Component
{
    public $alias;
    public $params = [];

    protected $listeners = ['showModal', 'resetModal'];

    public function render()
    {
        return view('livewire-modal::modal');
    }

    public function showModal($alias, ...$params)
    {
        $this->alias = $alias;
        $this->params = $params;

        $this->emit('invokeModal');
    }

    public function resetModal()
    {
        $this->reset();
    }
}
