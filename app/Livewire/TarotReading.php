<?php

namespace App\Livewire;

use App\Models\TarotCard;
use Livewire\Component;

class TarotReading extends Component
{
    public bool $isAnimating = false;

    public bool $isRevealed = false;

    public ?TarotCard $selectedCard = null;

    public array $allCards = [];

    public function mount(): void
    {
        $this->allCards = TarotCard::all()->toArray();
        $this->isAnimating = true;
    }

    public function selectCard(int $cardId): void
    {
        if (!$this->isAnimating) {
            return;
        }

        $this->selectedCard = TarotCard::find($cardId);
        $this->isAnimating = false;
        $this->isRevealed = true;
    }

    public function resetReading(): void
    {
        $this->selectedCard = null;
        $this->isRevealed = false;
        $this->isAnimating = true;
    }

    public function render()
    {
        return view('livewire.tarot-reading')
            ->layout('layouts.app');
    }
}
