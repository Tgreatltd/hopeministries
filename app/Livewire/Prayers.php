<?php

namespace App\Livewire;

use App\Models\Prayer;
use Livewire\Component;

class Prayers extends Component
{
    public $prayerPoint;


    public function savePrayer(){
      $this->validate([
            'prayerPoint' => 'required|string',
        ]);

        Prayer::create([
       'prayerPoint'=>$this->prayerPoint
        ]);

        session()->flash('success', 'uploaded successfully');

    }



    public function render()
    {
        return view('livewire.prayers', ['points'=>Prayer::all()]);
    }
}
