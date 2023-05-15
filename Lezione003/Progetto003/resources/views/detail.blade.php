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


    @if ($flights == 'departure') 
   <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: 50%;">
                    <div class="card-header">ID VOLO: {{ $flightDetail['id'] }}</div>
                        <img src="{{ $flightDetail['cover'] }}">
                        {{-- <ul>
                            <li> {{ $flightDetail['company'] }}</li>
                            <li> {{ $flightDetail['city'] }}</li>
                            <li> {{ $flightDetail['time'] }}</li>
                            <li> {{ $flightDetail['gate'] }}</li>
                            <li>
                                @if ($flightDetail['seats']['total'] - $flightDetail['seats']['occupied'] > 0) 
                                {{ 'Posti ancora disponibili: ' . $flightDetail['seats']['total'] - $flightDetail['seats']['occupied']}} 
                                @else 
                                {{ 'Sold out'}} 
                                @endif 
                            </li>
                        </ul> --}} 

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Città</th>
                                    <th scope="col">Compagnia</th>
                                    <th scope="col">Ora</th>
                                    <th scope="col">Gate</th> 
                                    <th scope="col">Disponibilità</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr> 
                                    <td>{{ $flightDetail['city'] }}</td>
                                    <td>{{ $flightDetail['company'] }}</td>
                                    <td>{{ $flightDetail['time'] }}</td>
                                    <td>{{ $flightDetail['gate'] }}</td> 
                                    <td> 
                                        @if ($flightDetail['seats']['total'] - $flightDetail['seats']['occupied'] > 0) 
                                        {{ 'Posti ancora disponibili: ' . $flightDetail['seats']['total'] - $flightDetail['seats']['occupied']}} 
                                        @else 
                                        {{ 'Sold out'}} 
                                        @endif 
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>

    @elseif ($flights == 'arrival')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: 50%;">
                    <div class="card-header">ID VOLO: {{ $flightDetail['id'] }}</div>
                        <img src="{{ $flightDetail['cover'] }}">
                        {{-- <ul>
                            <li> {{ $flightDetail['company'] }}</li>
                            <li> {{ $flightDetail['city'] }}</li>
                            <li> {{ $flightDetail['time'] }}</li>
                            <li> {{ $flightDetail['gate'] }}</li>
                        </ul> --}} 

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Città</th>
                                    <th scope="col">Compagnia</th>
                                    <th scope="col">Ora</th>
                                    <th scope="col">Gate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr> 
                                    <td>{{ $flightDetail['city'] }}</td>
                                    <td>{{ $flightDetail['company'] }}</td>
                                    <td>{{ $flightDetail['time'] }}</td>
                                    <td>{{ $flightDetail['gate'] }}</td> 
                                </tr>
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>

    @endif 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
