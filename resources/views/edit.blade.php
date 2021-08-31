<center><h2> Room Create </h2>
    @foreach ($room as $room)
        
    <form method="post" action="/updateroom" enctype="multipart/form-data">
        @csrf
        <!-- @csrf ko kam chai  yo form ko authenticated token laravel lai dine taki unverified user le yo form submit garna napaoos --> 
        Roomname:
        <input type="text" name="roomname" placeholder="{{$room->roomname}}"><br>
        Capacity
        <input type="number" name="capacity" placeholder="{{$room->capacity}}"><br>
        Price
        <input type="number" name="price" placeholder="{{$room->price}}"> 
        <input type="hidden" name="room_id" value="{{$room->id}}"> 

        <br>
        Image of room
        <input type="file" name="image">
        
        <button type="submit">submit</button>
    </form></center>
    @endforeach
   <br> 
    <br>