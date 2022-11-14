<?php

namespace App\Http\Livewire;

use App\Models\Continent;
use App\Models\Country;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CascadingDropdown extends Component
{
    public $continents = [];
    public $countries = [];
    public $selectedContinent = '0';
    public $selectedCountry = '0';

    public function render()
    {
        return view('livewire.cascading-dropdown');
    }

    public function mount()
    {
        $this->continents = Continent::all();
        // $this->getCountriesForSelectedContinent();
    }

    public function getCountriesForSelectedContinent()
    {
        $this->countries = Country::where('continent_id', $this->selectedContinent)->get();
        $this->selectedCountry = collect($this->countries)->pluck('name')->first();
    }
}
