<?php

namespace App\Livewire\Site;

use App\Models\Blog;
use Livewire\Attributes\Locked;
use Livewire\Component;

class WebBlogPostDetails extends Component
{
    #[Locked]
    public $blog;

    public function mount($slug)
    {
        $c = Blog::where('slug', $slug)->first();

        if (! $c) {
            return redirect()->route('site.index')->with('error-message', 'Car not found');
        }

        $this->blog = $c;
    }

    public function render()
    {
        return view('livewire.site.web-blog-post-details');
    }
}
