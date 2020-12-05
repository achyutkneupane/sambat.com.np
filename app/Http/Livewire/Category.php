<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category as Cat;

class Category extends Component
{
	public $cats;
	public function mount() {
    	$this->cats = Cat::all();
    }
    public function render()
    {
        return view('livewire.category');
    }
}
