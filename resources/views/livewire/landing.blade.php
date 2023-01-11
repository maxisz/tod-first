<div>
    <div class="container">
    <h1>Welcome to the Truth or Dare App</h1>
    <p>Enter a session code to join a room:</p>
     @error('session_code') <span class="error">{{ $message }}</span> @enderror
    <input wire:model="session_code" type="text" placeholder="Enter session code">
    <button wire:click="join">Join room</button>
    <p>Or <a href="/create" id="create-room-link">create a new room</a></p>
    <p> your code is : {{ $session_code }}</p>
  </div>
</div>
