<?php

namespace App\Livewire;

use App\Models\Prayer;
use Livewire\Component;

class Prayerpoint extends Component
{
    public function render()
    {
        // return view('livewire.prayerpoint', ['prayers'=>Prayer::all()]);
        return view('livewire.prayerpoint', ['prayers'=>Prayer::paginate()]);
    }
}
