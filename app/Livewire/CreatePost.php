<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{

    public $posts = [0,1,2];
    public $img = ['bg-[url(../../public/news-1.webp)]','bg-[url(../../public/news-2.webp)]','bg-[url(../../public/news-1.webp)]'];
    public $date = ['15/06/2024','15/06/2024','15/06/2024'];
    public $text = ['What is Microsoft Loop and how does it work','Boost productivity within your law firm with xerox technology','What is Microsoft Loop and how does it work'];
    public function render()
    {
        return view('livewire.create-post');
    }
}
