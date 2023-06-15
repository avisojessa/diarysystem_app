<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

    <x-sidebar.link
        title="Journal"
        href="{{ route('journal.index') }}"
        :isActive="request()->routeIs('journal.index')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    <x-sidebar.link
        title="Gallery"
        href="{{ route('gallery.index') }}"
        :isActive="request()->routeIs('gallery.index')"
    >
        <x-slot name="icon">
            <x-icons.gallery class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
</x-perfect-scrollbar>
