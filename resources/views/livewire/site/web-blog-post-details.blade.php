<div>
    <livewire:site.top-nav />

    <section class="pt-9 bg-white mb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $blog->title }}</h1>
                <p class="text-sm text-gray-600">
                    Published on {{ $blog->created_at->format('jS M Y') }}
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="mb-8">
                    <img src="{{ Storage::url($blog->featured_image) }}" alt="{{ $blog->title }}"
                        class="w-full h-auto rounded-lg shadow-md" />
                </div>

                <div class="text-lg text-gray-700 leading-loose">
                    {!! $blog->content !!}
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Related Posts</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Discover more articles that might interest you.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($relatedBlogs as $relatedBlog)
                    <div wire:key="{{ $relatedBlog->id }}" class="bg-white rounded-lg overflow-hidden shadow">
                        <div class="relative">
                            <a href="{{ route('site.blog.details', $relatedBlog->slug) }}">
                                <img src="{{ Storage::url($relatedBlog->featured_image) }}"
                                    alt="{{ $relatedBlog->title }}" class="w-full h-64 object-fit-cover" />
                            </a>
                        </div>

                        <div class="p-4">
                            <p class="text-lg font-semibold mb-1 two-line-truncate">{{ $relatedBlog->title }}</p>
                            <span class="text-sm text-gray-500">
                                {{ $relatedBlog->created_at->format('jS M Y') }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}

    <livewire:site.footer />
</div>
