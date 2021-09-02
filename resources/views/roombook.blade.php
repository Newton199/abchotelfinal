@extends('layouts.app')
@section('content')

<style>
    table {
  border-collapse: collapse;
  
}
th, td {
  padding: 10px;
  text-align: center;
}


tr:hover {background-color: #D6EEEE;}
    </style>
<body>



  <form action="/roombook/store" method="post">
       @csrf
  
    <div id="booking">
      <div class="container">
          <div class="section-header">
              <h2>Room Booking</h2>
              <p>
                  please book your room
              </p>
          </div>
          <div class="row">
              <div class="col-12">
                  <div class="booking-form">
                      <div id="success"></div>
                           <div class="form-row">
                              <div class="control-group col-md-6">
                                  <label>Mobile</label>
                                  <input type="number" name="phone" class="form-control" id="mobile" placeholder="E.g. +1 234 567 8900" required="required" data-validation-required-message="Please enter your mobile number" />
                                  
                                @error('phone')
                                
                                        <strong>{{ $message }}</strong>

                                @enderror
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="control-group col-md-6">

<label>Check-In</label>
<input type="datetime-local" class="form-control datetimepicker-input" id="f1-date-1" data-toggle="datetimepicker" data-target="#date-1" required="required" data-validation-required-message="Please enter date" />
<p class="help-block text-danger"></p>

                                
                                    @error('arrive')
                                
                                        <strong>{{ $message }}</strong>

                                    @enderror
                                  
                              </div>
                              <div class="control-group col-md-6">
                                
<label>Check-Out</label>
                                  <input type="datetime-local" class="form-control datetimepicker-input" id="f1-date-2" data-toggle="datetimepicker" data-target="#date-2" required="required" data-validation-required-message="Please enter date" />
                        <p class="help-block text-danger"></p>
                                    @error('depart')
                                
                                        <strong>{{ $message }}</strong>
        
                                    @enderror
                                
                              </div>
                          </div>
                            @foreach($rooms as $room)
                            <input type="hidden" name="room" value="{{$room->id}}">


                            @endforeach 
<br> <br><div class="control-group col-md-3">  </div>
                          <div class="button"><button type="submit" id="bookingButton">Book Now</button></div>
                  </div>
              </div>
          </div>
      </div>
  </form>

  <br> <br> 
<h3>Already booked dates</h3><br>
@foreach($books as $book)
{{$book->arrive}}
{{$book->depart}}
<br>
@endforeach
<br>
@foreach($rooms as $room)

<Center>
<table>
    <tr>
      
      <th>Room  Name</th>
      <th>Capacity</th> 
      <th>Prize</th>
  
    </tr>
  <tr>
  
      <td>{{$room->roomname}}</td>
      
      <td>{{$room->capacity}}</td>
      <td>{{$room->price}}</td>
    </tr>
   
  </table>
 
</Center>



@endforeach





  @endsection