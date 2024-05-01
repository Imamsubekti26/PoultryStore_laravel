@foreach ($table as $item)    
<tr>
  <td>{{ $item->nickname }}</td>
  <td>
    <a href="#" class="badge bg-label-primary me-1">trip 270424.01</a>
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