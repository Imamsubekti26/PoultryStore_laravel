@foreach ($table as $item)
    <tr>
      <td>{{ $item->detail }}</td>
      <td>{{ $item->date }}</td>
      <td>{{ $item->partner->name }}</td>
      <td>{{ $item->partner->area }}</td>
      <td>
        @if ($item->status == 'delivered')
        <a href="#" class="badge bg-label-primary me-1">TRIP {{ $item->trip->id }}</a>
        @elseif ($item->status == 'done' || $item->status == 'scheduled')
        <a class="badge bg-label-success me-1">{{ $item->status }}</a>
        @else
        <a class="badge bg-label-danger me-1">{{ $item->status }}</a>
        @endif
      </td>
      <td>
        <a href="{{ url('/activity/edit/'.$item->id) }}" class="badge text-black">
          <i class="bx bx-edit-alt me-1"></i>
          Edit
        </a>
      </td>
    </tr>
@endforeach