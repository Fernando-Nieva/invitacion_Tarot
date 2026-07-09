<?php

namespace App\Livewire;

use App\Models\TarotCard;
use Livewire\Component;

class TarotReading extends Component
{
    public array $allCards = [];

    public function mount(): void
    {
        $this->allCards = TarotCard::all()->toArray();
    }

    public function render()
    {
        return view('livewire.tarot-reading')
            ->layout('layouts.app');
    }
}
