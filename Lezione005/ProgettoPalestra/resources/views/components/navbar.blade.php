<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">ASD Judo Amisaniano</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'course') active @endif" href="{{ route('course') }}">Corsi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'contact') active @endif" href="{{ route('contact') }}">Contatti</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

{{-- 
@if (Route::currentRouteName() == 'homepage') metodo statico che stampa il nome della rotta corrente e che sarà uguale uguale a ''
    stampa il valore active
@endif
--}} 