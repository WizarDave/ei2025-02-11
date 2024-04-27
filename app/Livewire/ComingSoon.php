<?php

namespace App\Livewire;

use App\Models\ComingSoonEmail;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;

class ComingSoon extends Component
{
    use InteractsWithBanner;

    public $email;

    public function save()
    {
        $this->validate([
            'email' => 'required|email|unique:coming_soon_emails,email',
        ]);

        ComingSoonEmail::create([
            'email' => $this->email,
        ]);

        $this->banner('Thanks for subscription! We will keep you updated.');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.coming-soon');
    }
}
