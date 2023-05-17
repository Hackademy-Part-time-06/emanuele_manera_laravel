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
                            @isset($flightDetail['seats'])  {{-- isset, istruzione php che, se la condizione è verificata, restituisce ciò che passo --}}
                                <th scope="col">Disponibilità</th>
                            @endisset
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $flightDetail['city'] }}</td>
                            <td>{{ $flightDetail['company'] }}</td>
                            <td>{{ $flightDetail['time'] }}</td>
                            <td>{{ $flightDetail['gate'] }}</td>
                            @isset($flightDetail['seats'])
                                <td>
                                    @if ($flightDetail['seats']['total'] - $flightDetail['seats']['occupied'] > 0)
                                        {{ 'Posti ancora disponibili: ' . $flightDetail['seats']['total'] - $flightDetail['seats']['occupied'] }}
                                    @else
                                        {{ 'Sold out' }}
                                    @endif
                                </td>
                            @endisset
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>