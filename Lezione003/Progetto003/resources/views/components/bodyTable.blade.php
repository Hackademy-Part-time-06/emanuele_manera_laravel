<tr>
    <!-- tabella -->
    <th scope="row">{{ $flight['id'] }}</th>
    <td><a href="{{ route('detail', $flight['id']) }}">{{ $flight['city'] }}</a></td>
    <td>{{ $flight['company'] }}</td>
    <td>{{ $flight['time'] }}</td>
    <td>{{ $flight['gate'] }}</td>
</tr>
