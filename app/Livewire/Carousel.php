<?php

namespace App\Livewire;

use Livewire\Component;

class Carousel extends Component
{
    public $slides = [1,2,3,4,5];
    public $img = ["bg-[url('../../public/case-study-1.webp')]","bg-[url('../../public/case-study-2.webp')]","bg-[url('../../public/case-study-1.webp')]","bg-[url('../../public/case-study-2.webp')]","bg-[url('../../public/case-study-1.webp')]"];
    public function render()
    {
        return view('livewire.carousel');
    }
}
