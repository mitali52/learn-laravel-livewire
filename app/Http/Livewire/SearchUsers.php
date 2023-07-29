<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class SearchUsers extends Component
{
    public $searchTerm, $users;

    public function render()
    {
        // dd($this->searchTerm);
        if (!empty($this->searchTerm)) {
            $searchTerm = '%' . $this->searchTerm . '%';
            $this->users = User::where('fname', 'like', $searchTerm)->get();
        } else {
            $this->users = User::all();
        }
        
        return view('livewire.search-users');
    }

    // public $searchTerm = '';
    // public $users;

    // public function render()
    // {
    //     $this->users = User::all();
    //     return view('livewire.search-users');
    // }

    // public function search()
    // {
    //     // dd($this->searchTerm);
    //     $searchTerm = '%' . $this->searchTerm . '%';
    //     dd($searchTerm);
    //     $this->users = User::where('fname', 'like', $searchTerm)->get();

    //     return view('livewire.search-users');
    // }


}
