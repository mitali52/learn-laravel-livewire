<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class SearchUsers extends Component
{
    public $searchTerm, $users;

    /**
     * Called on all requests, immediately after the component is instantiated,
     * but before any other lifecycle methods are called
     */
    public function boot()
    {
        echo "boot method called \n";
    }

    /**
     * Called when a Livewire component is newed up (think of it like a constructor)
     */
    public function mount()
    {
        echo "mount method called \n";
    }

    /**
     * Called on all requests, after the component is mounted or hydrated,
     * but before any update methods are called
     */
    public function booted()
    {
        echo "booted method called \n";
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     * Called before "dehydrate" and renders the Blade view for the component
     */
    public function render()
    {
        echo "render called \n";
        // dd($this->searchTerm);
        if (!empty($this->searchTerm)) {
            $searchTerm = '%' . $this->searchTerm . '%';
            $this->users = User::where('fname', 'like', $searchTerm)->get();
        } else {
            $this->users = User::all();
        }

        return view('livewire.search-users');
    }

    /**
     * Called after render(), but before the component has been dehydrated and sent to the frontend
     */
    public function dehydrate()
    {
        echo "dehydrate called \n";
    }

    /**
     * Runs before a property called $foo is dehydrated
     */
    public function dehydrateSearchTerm()
    {
        echo "dehydrate search term called \n";
    }

    /**
     * Called on subsequent Livewire requests after the component has been hydrated, but before any other action occurs
     */
    public function hydrate()
    {
        echo "hydrate method called \n";
    }

    /**
     * Runs after a property called $searchTerm is hydrated
     */
    public function hydrateSearchTerm()
    {
        echo "hydrate searchTerm called \n";
    }

    /**
     * Runs before any update to the Livewire component's data (Using wire:model, not directly inside PHP)
     */
    public function updating()
    {
        echo "updating called \n";
    }

    /**
     * Called after a property has been updated
     */
    public function updated()
    {
        echo "updated called \n";
    }

    /**
     * Runs before a property called $searchTerm is updated
     */
    public function updatingSearchTerm()
    {
        echo "updating search term \n";
    }

    /**
     * Called after the "searchTerm" property has been updated
     */
    public function updatedSearchTerm()
    {
        echo "updated search term \n";
    }

}
