<x-master>
    {{-- main body --}}
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">

                {{-- sidebar-right --}}
                @if (auth()->check())
                    <div class="lg:w-32">
                        @include('_sidebar-links')
                    </div>
                @endif

                {{-- tweets --}}
                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px;">
                    {{ $slot }}
                </div>

                {{-- following-list --}}
                @if (auth()->check())
                    <div class="lg:w-1/6">
                        @include('_following-list')
                    </div>
                @endif
            </div>
        </main>
    </section>
</x-master>
