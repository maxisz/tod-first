<div wire:poll>





    <div class="container">
    <h1>Waiting Room</h1>

    
    <p>You are in room: <strong id="room-name">{{ Session::get('room_name'); }}</strong></p>
    <p>Session code: <strong id="session-code">{{ Session::get('session_code'); }}</strong></p>
    <p>Players available:</p>
    <ul id="player-list">
  @foreach ($users as $user)
    
      <li>{{ $user->user_name; }}</li>

  @endforeach
      {{-- <li>Player 3</li> --}}
    </ul>
    <p>The game will start when the host clicks the "Start game" button.</p>
    <p>How to play:</p>
    <ol>
      <li>The host will choose either "truth" or "dare" for each player.</li>
      <li>The player must then complete the truth or dare prompt.</li>
      <li>The game continues until all players have completed their turn.</li>
    </ol>
    @if (Session::get('is_admin') == true)
        
    <button> Start Game </button>
    @endif
     <button> exit Room </button>
  </div>

</div>
