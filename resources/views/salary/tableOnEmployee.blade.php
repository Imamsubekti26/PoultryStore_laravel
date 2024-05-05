@foreach ($table as $item)
  <tr>
    <td>{{ $item->reason }}</td>
    <td>{{ $item->amount }}</td>
    <td>{{ $item->date }}</td>
  </tr>
@endforeach