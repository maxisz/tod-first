<div>

  <div wire:poll>
    Current time: {{ now() }}
</div>
      <div class="container">
    <h1>Create a Room</h1>
     @if(Session::get('session_code'))
       <p>You Already Have a room with session code : <strong> {{ Session::get('session_code') }} ,<br> <br> <a href = "/room/{{Session::get('session_code') }}" >go to room </a>
       
       OR <a href="" style="colour:red" wire:click="deleteroom"> Create A New Room </a>
       </p>


    @else


    @error('room_name')
        <span class="bg-danger"> {{ $message }} </span>
    @enderror
    <p>Enter a name for your room:</p>
    <input wire:model="room_name" type="text" placeholder="Enter room name">
    <button wire:click="create">Create room</button>
    <p>Your session code is: <strong id="session-code">{{ $session_code }}</strong></p>
    <p>Share this code with your friends to invite them to join your room.</p>
    <a href="#" id="back-link">Go back</a>
  </div>


    @endif


</div>
