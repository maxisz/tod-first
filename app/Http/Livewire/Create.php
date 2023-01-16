<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Create extends Component
{

    public $room_name;
    public $session_code;

    protected $rules= ['room_name' => 'required|min:3',];

    public function mount()
    {




        $this->session_code = rand(100000,999999);
    }
    public function create()
    {
        $this->validate();

        $data = [
            'room_name' => $this->room_name,
            'session_code' => $this->session_code ,
        ];
        DB::table('rooms')->insert($data);
        Session::put('session_code', $this->session_code);
        Session::put('is_admin', true);
        return redirect()->to('/room/'.$this->session_code);

    }
    public function render()
    {
        return view('livewire.create');
    }

    public function deleteroom()
    {
        DB::table('rooms')->where('session_code', '=', Session::get('session_code'))->delete();
        Session::forget('session_code');

        // return redirect()->to('/creates');
    }
}
