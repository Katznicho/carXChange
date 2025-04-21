<div>
    <livewire:site.top-nav />

    <section class="pt-9 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Explore Our Latest Blog Posts</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Stay updated with the latest news, reviews, and
                    insights from the automotive world, curated just for you.</p>
            </div>

            <div class="max-w-7xl mx-auto px-4 py-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($blogs as $blog)
                        <div wire:key={{ $blog->id }} class="bg-white rounded-lg overflow-hidden shadow">
                            <div class="relative">
                                <a href="{{ route('site.blog.details', $blog?->slug) }}">
                                    <img src="{{ Storage::url($blog?->featured_image) }}" alt="Toyota Camry"
                                        class="w-full h-64 object-fit-cover" />
                                </a>

                                @if ($blog->is_featured)
                                    <div class="absolute top-4 left-4">
                                        <span
                                            class="bg-green-600 text-white px-4 py-2 rounded-full text-sm font-medium">
                                            Featured
                                        </span>
                                    </div>
                                @endif
                            </div>

                            <div class="p-4">
                                <p class="text-lg font-semibold mb-1 two-line-truncate">{{ $blog?->title }}</p>

                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-500">
                                        {{ $blog->created_at->format('jS M Y') }}
                                    </span>

                                    <a href="{{ route('site.blog.details', $blog?->slug) }}"
                                        class="text-blue-600 text-sm font-medium flex items-center">
                                        View Article

                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <livewire:site.footer />
</div>
