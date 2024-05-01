@foreach ($table as $item)
    <tr>
      <td>{{ $item->plat }}</td>
      <td>{{ $item->merk }}</td>
      <td>
        @if ($item->status == 'busy')
        <a href="#" class="badge bg-label-primary me-1">{{ $item->status }}</a>
        @elseif ($item->status == 'free')
        <a class="badge bg-label-success me-1">{{ $item->status }}</a>
        @else
        <a class="badge bg-label-danger me-1">{{ $item->status }}</a>
        @endif
      </td>
      <td>
        <a href="{{ url('car/edit/'.$item->id) }}" class="text-black">
          <i class="bx bx-edit-alt me-1"></i>
          Edit
        </a>
      </td>
    </tr>
@endforeach