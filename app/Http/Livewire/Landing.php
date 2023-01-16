<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Landing extends Component
{
    public $session_code;
    public $user_name;
    public $room_true;
    public $room_name;
    public $secret;

    protected $rules = [
        'session_code' => 'required|min:6',
        
    ];

    public function mount(){
    $this->room_true = 0;
    $this->session_code = Session::get('session_code');
    $this->secret = Str::random(10);
    }
    public function join()
    {
        $this->validate();

        $ds = DB::table('rooms')->where('session_code',$this->session_code)->exists();
        if($ds)
        {
            $data = DB::table('rooms')->where('session_code',$this->session_code)->first();
            $this->room_name = $data->room_name;
            $this->room_true = 1;

        }else{
            $this->room_true = 0;
            session()->flash('error', 'Room Not Found');
        }

    }

    public function login()
    {

        if($this->user_name == '')
        {
            session()->flash('error', 'Name is Required');
        }else{
            $ds = [
                'user_name'=> $this->user_name,
                'user_secret' => $this->secret,
                'session_code' => $this->session_code,
            
            ];
            Session::put($ds);
            DB::table('room_users')->insert($ds);
            return redirect()->to('/room/'.$this->session_code);


        }
    }
    public function render()
    {
        return view('livewire.landing');
    }
}
