<tr>
  <td><input type="checkbox" value="{{ $member->id }}" name="addPoints"></td>
  <td>{{ $member->name }}</td>
  <td>{{ $member->email }}</td>
  <td>{{ $member->phone }}</td>
  <td>{{ $member->size }}</td>
  <td>{{ $member->points }}</td>
  <td>
    <button type="button" class="button is-outlined is-small">
      <a href="{{ action('HomeController@edit', $member->id) }}">Ændre</a>
    </button>
  </td>
  <td>
    <form class="deleteForm" action="{{ action('HomeController@destroy', $member->id)}}" method="post">
      @csrf
      <input type="hidden" name="_method" value="DELETE">
      <button type="submit" class="button is-danger is-outlined is-small">
        Slet
      </button>
    </form>
  </td>
</tr>
