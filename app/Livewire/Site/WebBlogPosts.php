<?php

namespace App\Livewire\Site;

use App\Models\Blog;
use Livewire\Component;

class WebBlogPosts extends Component
{
    public function render()
    {
        $blogs = Blog::where('is_published', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.site.web-blog-posts', compact('blogs'));
    }
}
