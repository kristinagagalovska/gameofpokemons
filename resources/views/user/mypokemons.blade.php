<table>
    @foreach($pokemons as $pokemon)
        <tr>
            <td>{{$pokemon->name}}</td>
            <td>{{$pokemon->strength}}</td>
            <td><td><a href="{{route('user.abandon', $pokemon->id)}}">Abandon Pokemon</a></td>
        </tr>
        @endforeach
</table>