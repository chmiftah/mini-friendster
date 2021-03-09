<?php

namespace App\Http\Livewire\Status;

use App\Models\Status;
use Livewire\Component;

class Shows extends Component
{
    public $user;
    public $status=[];
    protected $withCount =['comments'];
    public function mount($hash){
        $this->status = Status::with('user')->withCount('comments')->where('hash', $hash)->firstorFail();
    }
    public function render()
    {
        return view('livewire.status.shows')->extends('layouts.app');
    }
}
