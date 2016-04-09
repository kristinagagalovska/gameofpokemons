<table>
    @foreach($pokemons as $pokemon)
        <tr>
            <td><p>{{$pokemon->name}}</p></td>
        </tr>
    @endforeach
</table>
