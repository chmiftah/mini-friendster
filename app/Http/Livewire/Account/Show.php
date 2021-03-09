<?php

namespace App\Http\Livewire\Account;

use App\Models\Status;
Use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;


class Show extends Component
{
    public $user;
    public $perPage=5;
    public $bio;
    public $readmore=true;
    public function readMore()
    {
        $this->bio = $this->user->description;
        $this->readmore=false;
    }
    public function less()
    {
        $this->bio = Str::limit($this->user->description, 180);
        $this->readmore=true;
    }
    public function loadmore()
    {
        sleep(1);
        $this->perPage+=10;
    }
    public function mount($identifier){
        $this->user = User::where('username', $identifier)->orWhere('hash', $identifier)->first();
        $this->bio = Str::limit($this->user->description, 180);
    }
    public function render()
    {
        $statuses = $this->user->statuses()->with('user')->latest()->paginate($this->perPage);
        return view('livewire.account.show',compact('statuses'))->extends('layouts.app');
    }
}
