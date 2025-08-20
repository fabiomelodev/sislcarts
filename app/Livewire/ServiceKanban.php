<?php

namespace App\Livewire;

use App\Models\Service;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ServiceKanban extends Component
{
    public Collection $collectionsOnBold;

    public Collection $collectionsInProgress;

    public Collection $collectionsDone;

    public function mount()
    {
        $this->getCollectionOnBoldQuery();
    }

    public function getCollectionOnBoldQuery()
    {
        $this->collectionsOnBold = Service::all();
    }

    public function render()
    {
        return view('livewire.service-kanban');
    }
}
