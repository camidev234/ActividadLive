<?php

namespace App\Livewire;

use App\Models\Departament;
use Livewire\Component;

class ListComponent extends Component
{

    // similar to useState in React
    public $queryWord;

    public function render()
    {
        $departaments = Departament::where('departament_name', 'like', '%' . $this->queryWord . '%')->get();
        return view('livewire.list-component', compact('departaments'));
    }
}
