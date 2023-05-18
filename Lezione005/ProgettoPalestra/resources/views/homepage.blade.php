<x-main>

    <x-slot name='title'>
        Pagina principale
    </x-slot>
    
    @if (session('success')) 
    Grazie per averci contattato!
    @endif

</x-main>
