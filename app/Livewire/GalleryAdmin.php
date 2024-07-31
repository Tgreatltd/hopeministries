<?php

namespace App\Livewire;

use App\Models\GalleryAdmin as ModelsGalleryAdmin;
use App\Models\Image;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class GalleryAdmin extends Component
{
    use WithFileUploads;
    public $image1, $image2,$image3,$image4,$image5, $imageName1, $imageName2,$imageName3,$imageName4,$imageName5;
    public function saveImage(){
        $this->validate([
             'image1' => 'image|max:1024', // Adjust validation rules as needed
             'image2' => 'image|max:1024',// Adjust validation rules as needed
             'image3' => 'image|max:1024', // Adjust validation rules as needed
             'image4' => 'image|max:1024',// Adjust validation rules as needed
             'image5' => 'image|max:1024', // Adjust validation rules as needed
        ]);

        $this->imageName1 = $this->image1->store('images', 'public');
        $this->imageName2 = $this->image2->store('images', 'public');
        $this->imageName3 = $this->image3->store('images', 'public');
        $this->imageName4 = $this->image4->store('images', 'public');
        $this->imageName5 = $this->image5->store('images', 'public');

        Image::create([
            'image1' => $this->imageName1,
            'image2' => $this->imageName2,
            'image3' => $this->imageName3,
            'image4' => $this->imageName4,
            'image5' => $this->imageName5,
        ]);

        $this->reset('image1');
        $this->reset('image2');
        $this->reset('image3');
        $this->reset('image4');
        $this->reset('image5');

        session()->flash('success', 'images have been uploaded succesfuly');
    }

    public function render()
    {
        return view('livewire.gallery-admin');
    }
}
