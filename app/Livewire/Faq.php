<?php

namespace App\Livewire;

use Livewire\Component;

class Faq extends Component
{
    public $faqs = [
        [
            'title' => 'Faq 1',
            'content' => 'Faq Content 1',
        ],
        [
            'title' => 'Faq 2',
            'content' => 'Faq Content 2',
        ],
        [
            'title' => 'Faq 3',
            'content' => 'Faq Content 3',
        ],
        [
            'title' => 'Faq 4',
            'content' => 'Faq Content 4',
        ],
    ];

    public $selectedFaq = null;

    public function toggleFaq($key)
    {
        $this->selectedFaq = $key;
    }

    public function render()
    {
        return view('livewire.faq');
    }
}
