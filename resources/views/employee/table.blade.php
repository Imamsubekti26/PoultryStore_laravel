@foreach ($table as $item)    
<tr>
  <td>{{ $item->nickname }}</td>
  <td>
    @if ($item->status == 'off')
    <a href="#" class="badge bg-label-secondary me-1">tidak di kantor</a>  
    @elseif ($item->status == 'free')
    <a href="#" class="badge bg-label-success me-1">free</a>
    @else
    <a href="#" class="badge bg-label-primary me-1">trip 270424.01</a>
    @endif
  </td>
  <td>
    <a href="https://wa.me/{{ $item->phone }}" target="_blank">{{ $item->phone }}</a>
  </td>
  <td>
    <a href="{{ url('employee/edit/'.$item->id) }}" class="text-black">
      <i class="bx bx-edit-alt me-1"></i>
      Edit
    </a>
  </td>
</tr>
@endforeach