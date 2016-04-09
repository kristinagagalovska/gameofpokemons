<form  action="" method="POST" enctype="multipart/form-data">

    </br><input name="name" type="text" placeholder="Pokemon Name" value="{{$pokemon->name}}">
    </br><input name="strength" type="text" placeholder="Pokemon Strength" value="{{$pokemon->strength}}">
    </br><input name="image" type="file" id="file" value="{{$pokemon->image}}">
    </br><input type="submit" name="save">

</form>