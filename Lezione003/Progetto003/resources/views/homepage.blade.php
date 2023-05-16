<x-main>

    <div class="container-fluid">
        <div class="row col-12">
            <div class="col-6">
                <div class="card" style="width: 100%;">
                    <div class="card-header">Partenze</div>
                        <!-- <ul class="list-group list-group-flush"> --> 
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Città</th>
                                    <th scope="col">Compagnia</th>
                                    <th scope="col">Ora</th>
                                    <th scope="col">Gate</th>
                                    </tr>
                                </thead>
                                <tbody>
                        @foreach ($flights['departure'] as $flightDeparture)
                            <!-- richiamo array passato come secondo parametro in PageController -->
                            {{-- <li class="list-group-item">   <!-- lista -->
                                {{ $flightDeparture['company'] }}
                                <a href="{{ route('detail', $flightDeparture['id']) }}">{{ $flightDeparture['id'] }}</a>
                                {{ $flightDeparture['city'] }}
                                {{ $flightDeparture['time'] }}
                                {{ $flightDeparture['gate'] }}

                            </li> --}} 

                                    <tr>    <!-- tabella -->
                                    <th scope="row"><a href="{{ route('detail', $flightDeparture['id']) }}">{{ $flightDeparture['id'] }}</a></th>
                                    <td>{{ $flightDeparture['city'] }}</td>
                                    <td>{{ $flightDeparture['company'] }}</td>
                                    <td>{{ $flightDeparture['time'] }}</td>
                                    <td>{{ $flightDeparture['gate'] }}</td>
                                    </tr>
                        @endforeach
                        <!-- </ul> --> 
                                </tbody>
                            </table>
                </div>
            </div>

            <div class="col-6">
                <div class="card" style="width: 100%;">
                    <div class="card-header">Arrivi</div>
                        <!-- <ul class="list-group list-group-flush"> -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Città</th>
                                    <th scope="col">Compagnia</th>
                                    <th scope="col">Ora</th>
                                    <th scope="col">Gate</th>
                                    </tr>
                                </thead>
                                <tbody>
                        @foreach ($flights['arrival'] as $flightArrival)
                            <!-- richiamo array passato come secondo parametro in PageController -->
                            {{-- <li class="list-group-item">   <!-- lista -->
                                {{ $flightArrival['company'] }}
                                <a href="{{ route('detail', $flightArrival['id']) }}">{{ $flightArrival['id'] }}</a>
                                {{ $flightArrival['city'] }}
                                {{ $flightArrival['time'] }}
                                {{ $flightArrival['gate'] }}

                            </li> --}}

                            <tr>    <!-- tabella -->
                                <th scope="row"><a href="{{ route('detail', $flightArrival['id']) }}">{{ $flightArrival['id'] }}</a></th>
                                <td>{{ $flightArrival['city'] }}</td>
                                <td>{{ $flightArrival['company'] }}</td>
                                <td>{{ $flightArrival['time'] }}</td>
                                <td>{{ $flightArrival['gate'] }}</td>
                                </tr>
                        @endforeach
                        <!-- </ul> --> 
                                </tbody>
                            </table>
                </div>
            </div>
        </div>
    </div>
    
</x-main> 
