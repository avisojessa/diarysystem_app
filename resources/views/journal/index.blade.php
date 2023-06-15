<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Journal') }}
            </h2>
            <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="p-6 text-gray-900 text-black dark:text-gray-100">
            <div class="container flex justify-end">
                <a href="{{ route('journal.create') }}" class="btn btn-danger" title="Add Image to the gallery"><i class="fas fa-solid fas fa-plus"></i><span class="pe-3"></span><i class="fas fa-solid fas fa-pen"></i><i class="fas fa-solid fas fa-book"></i></a>
             </div>
             @if (count($journals) == 0)
             <div class="text-center text-bold text-xl text-cyan-700">
                {{ __('Empty Journal') }}
             </div>
             @else
             <div class="flex flex-wrap">
                 @foreach($journals as $journal)
                 <a href="{{ route('journal.show',$journal->id) }}">
                    <div class="w-64 rounded-lg hover:bg-black shadow-lg p-4 mx-2 my-2">
                        <div class="p-4 text-bold text-center text-xl">
                            <h2>
                                {{ ('Title: '.$journal->journaltitle) }}
                                </h2>
                            <h2>Date of Event Happened: {{ $journal->eventhappen }}</h2>
                            <p class="text-muted">{{ $journal->discriptions }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
            </div>
             @endif
        </div>
    </div>    </div>
</x-app-layout>
