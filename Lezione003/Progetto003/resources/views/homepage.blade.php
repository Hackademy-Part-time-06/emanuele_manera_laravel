<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bugliano Airline</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bugliano Airline</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Partenze</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Arrivi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="card" style="width: 75%;">
                    <div class="card-header">Partenze</div>
                        <ul class="list-group list-group-flush">
                        @foreach ($flights['departure'] as $flightDeparture)
                            <!-- richiamo array passato come secondo parametro in PageController -->

                            <li class="list-group-item">
                                {{ $flightDeparture['company'] }}
                                <a href="{{ route('detail', $flightDeparture['id']) }}">{{ $flightDeparture['id'] }}</a>
                                {{ $flightDeparture['city'] }}
                                {{ $flightDeparture['time'] }}
                                {{ $flightDeparture['gate'] }}

                            </li>
                        @endforeach
                        </ul>
                </div>
            </div>

            <div class="col-6">
                <div class="card" style="width: 75%;">
                    <div class="card-header">Arrivi</div>
                        <ul class="list-group list-group-flush">
                        @foreach ($flights['arrival'] as $flightArrival)
                            <!-- richiamo array passato come secondo parametro in PageController -->
                            <li class="list-group-item">
                                {{ $flightArrival['company'] }}
                                <a href="{{ route('detail', $flightArrival['id']) }}">{{ $flightArrival['id'] }}</a>
                                {{ $flightArrival['city'] }}
                                {{ $flightArrival['time'] }}
                                {{ $flightArrival['gate'] }}

                            </li>
                        @endforeach
                        </ul>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
