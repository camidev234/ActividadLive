<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\Departament;
use Livewire\Component;

class SearchComponent extends Component
{

    // similar to useState in React
    public $queryWord;
    public $idFind;
    public $departament_name;

    public function render()
    {
        $departaments = Departament::where('departament_name', 'like', '%' . $this->queryWord . '%')->get();
        $citiesFind = City::where('departament_id', $this->idFind)->get();
        $this->departament_name = Departament::find($this->idFind);
        return view('livewire.search-component', ['departaments' => $departaments, 'citiesFind' => $citiesFind, 'departament_name' => $this->departament_name]);
    }

    // this function is similar to use set in state on React

    public function selectDepartament($departamentId)
    {
        $this->idFind = $departamentId;
    }
}
