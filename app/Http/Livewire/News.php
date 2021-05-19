<?php

namespace App\Http\Livewire;

use App\Models\Berita;
use Livewire\Component;

class News extends Component
{
    public function render()
    {
        return view('livewire.news', [
            'news'=>Berita::paginate(10)
        ]);
    }
}
