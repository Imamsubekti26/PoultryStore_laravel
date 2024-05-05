@foreach ($table as $item)
    <tr>
      <td>{{ $item->employee->name }}</td>
      <td>{{ $item->month }}</td>
      <td>{{ $item->salary }}</td>
      <td>
        <a 
          @class([
            'badge',
            'me-1',
            ($item->status == 'paid') ? 'bg-label-success' : 'bg-label-secondary'
          ])
        >Lunas</a>
      </td>
      <td>
        <a href="{{ url('salary/tambah/'.$item->employee->id) }}" class="text-black">
          <i class="bx bx-edit-alt me-1"></i>
          Tambah Bonus/Pinalty
        </a>
      </td>
    </tr>
@endforeach