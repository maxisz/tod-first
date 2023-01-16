<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class Room extends Component
{
    public $users;

    public function mount()
    {
        $this->users = DB::table('room_users')->where('session_code',Session::get('session_code'))->get();
    }

    public function render()

    {
        $this->users = DB::table('room_users')->where('session_code',Session::get('session_code'))->get();
        $ds  = DB::table('rooms')->where('session_code',Session::get('session_code'))->first();
        // dd($ds->room_name);
        Session::put('room_name',$ds->room_name);
        return view('livewire.room',['users' => $this->users]);
    }
}
