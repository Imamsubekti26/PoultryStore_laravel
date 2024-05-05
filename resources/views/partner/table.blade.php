@foreach ($table as $item)
    <tr>
      <td>{{ $item->name }}</td>
      <td>{{ $item->area }}</td>
      <td>
        <a href="{{ url('https://wa.me/'.$item->phone) }}">{{ $item->phone }}</a>
      </td>
      <td>{{ $item->partnership_type }}</td>
      <td>
        <a href="{{ url('/partner/edit/'.$item->id) }}" class="text-black">
          <i class="bx bx-edit-alt me-1"></i>
          Edit
        </a>
      </td>
    </tr>
@endforeach