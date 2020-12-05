<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Post as Posts;

class Post extends Component
{
    use WithPagination;
    public $catId;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
    	'catSelect',
    ];
    public function mount() {
    	$this->catId = 'all';
    }
    public function catSelect($catId)
    {
    	$this->catId = $catId;
    }
    public function render()
    {
    	if($this->catId != "all") {
	        return view('livewire.post', [
	        	'posts' => Posts::where('category_id',$this->catId)->paginate(10),
	        ]);
	    }
	    else {
	    	return view('livewire.post', [
	        	'posts' => Posts::paginate(10),
	        ]);
	    }
    }
}
