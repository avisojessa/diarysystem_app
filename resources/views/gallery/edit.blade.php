<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Edit picture') }}
            </h2>
            <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <div class="mb-5 text-center text-bold text-xl text-black">
                <form method="post" action="{{ route('gallery.update',$gallery->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                @endif
                <img src="{{ asset('storage/'.$gallery->image) }}" alt="Image" style="width: 250px; height: 250px;">
                    <div class="form-group mb-3 mt-4">
                        <label for="place">Place of Event</label>
                        <input class="" type="text" name="place" value="{{ $gallery->place }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="datehappen">Date of Event</label>
                        <input class="" type="date" name="datehappen" id="datehappen" value="{{ $gallery->datehappen }}">
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary text-black">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
