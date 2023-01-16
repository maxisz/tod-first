<div>
    <div class="container">
    {{-- <p> your code is : {{ $session_code }}</p> --}}


    {{-- // ask for name  --}}
    @if ($room_true == 1)
     <div>
        @if (session()->has('error'))
            <div class="alert alert-success">
                {{ session('error') }}
            </div>
        @endif
    </div>
    <h1>{{ $room_name }}'s Room</h1>
    <input wire:model="user_name" type="text" placeholder="Enter Your Nick Name">
    <button wire:click="login">Join room</button>



    @else
    <h1>Welcome to the Truth or Dare App</h1>
    <p>Enter a session code to join a room:</p>
     @error('session_code') <span class="error">{{ $message }}</span> @enderror
       <div>
        @if (session()->has('error'))
            <div class="alert alert-success">
                {{ session('error') }}
            </div>
        @endif
    </div>
    <input wire:model="session_code" type="text" placeholder="Enter session code">
    <button wire:click="join">Join room</button>
    <p>Or <a href="/create" id="create-room-link">create a new room</a></p>
      
    @endif
  </div>
</div>
