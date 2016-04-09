<table>
    @foreach($pokemons as $pokemon)
        <tr>
            <td><p>{{$pokemon->name}}</p></td>
            <td><p><a href="{{route('admin.pokemons.edit', $pokemon->id)}}">Edit Pokemon</a></p></td>
            <td><p><a href="{{route('admin.pokemons.delete', $pokemon->id)}}">Delete Pokemon</a></p></td>
        </tr>
    @endforeach
</table>
