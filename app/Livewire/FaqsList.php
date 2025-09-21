<?php

namespace App\Livewire;

use Livewire\Component;

class FaqsList extends Component
{
    public $posts = ["Do you offer 24hr support?","Do you sell Xerox printers?","Can I upgrade my support package?","Do you sell Xerox printers?","Do you sell Xerox printers?","Do you sell Xerox printers?","Do you sell Xerox printers?","Do you sell Xerox printers?","Do you sell Xerox printers?"];
    public function render()
    {
        return view('livewire.faqs-list');
    }
}
