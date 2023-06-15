<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Write to the Diary') }}
            </h2>
            <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="p-6 text-gray-900">
            <form method="post" action="{{ route('journal.store') }}" enctype="multipart/form-data">
                @csrf
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
                <div class="container text-center">
                    <div class="form-group mb-4 p-3">
                        <label for="journaltitle">Title</label>
                        <input class="form-control" type="text" name="journaltitle" id="journaltitle" placeholder="Write the title of your Journal">
                    </div>
                    <div class="form-group mb-4 p-3">
                        <label for="eventhappen">Event Happen</label>
                        <input class="form-control" type="dateTime-local" name="eventhappen" id="eventhappen">
                    </div>
                    <div class="form-group mb-4 p-3">
                        <label for="discriptions">The Message</label>
                        <input class="form-control pb-5" type="text" name="discriptions" id="discriptions" placeholder="Write your Message here....">
                    </div>
                    <button type="submit" class="border-solid bg-sky-800 hover:text-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
