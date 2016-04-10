<table>
    @foreach($pokemons as $pokemon)
        <tr>
            <td><p>{{$pokemon->name}}</p></td>
            <td><a href="{{route('user.choose', $pokemon->id)}}">Choose Pokemon</a></td>
        </tr>
    @endforeach
</table>