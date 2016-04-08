<table>
    @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <td><a href="{{route('admin.users.delete', $user->id)}}">Delete User</a></td>
        </tr>
        <tr>
            <td><a href="{{route('admin.users.mark', $user->id)}}">Mark</a></td>
        </tr>
    @endforeach
</table>
