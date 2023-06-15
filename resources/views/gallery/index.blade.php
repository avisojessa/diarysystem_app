<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Gallery') }}
            </h2>
            <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="p-6 text-gray-900 text-white dark:text-gray-100">
            <div class="container flex justify-end">
                <a href="{{ route('gallery.create') }}" class="btn btn-success" title="Add Image to the gallery"><i class="fas fa-solid fas fa-plus"></i><span class="pe-3"></span><i class="fas fa-solid fas fa-image"></i></a>
             </div>
             @if (count($galleries) == 0)
             <div class="text-center text-bold text-xl text-cyan-700">
                {{ __('Empty Gallery') }}
             </div>
             @else
             <div class="flex flex-wrap bg-slate-900">
                 @foreach($galleries as $gallery)
                 <a href="{{ route('gallery.show',$gallery->id) }}">
                    <div class="w-64 rounded-lg hover:bg-black shadow-lg p-4 mx-2 my-2">
                        <img src="{{ asset('storage/'.$gallery->image) }}" alt="Image" style="width: 250px; height: 250px;">
                        <div class="p-4 text-bold text-center text-xl">
                            <h2>Place Happened: {{ $gallery->place }}</h2>
                            <p>Date Happened: {{ $gallery->datehappen }}</p>
                        </div>
                        <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-black hover:text-blue-300 btn btn-danger">
                                <i class="fas fa-solid fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </a>
            @endforeach
            </div>
             @endif
        </div>
    </div>
</x-app-layout>
