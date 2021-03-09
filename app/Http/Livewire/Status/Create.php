<?php

namespace App\Http\Livewire\Status;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
class Create extends Component
{
    public $body="";

    public function updated($fields){
        $this->validateOnly($fields,[
        'body'=>'string|max:100'
    ]);
    }
    public function store(){
        $this->validate([
            'body'=>'required',
        ]);
        $status=auth()->user()->statuses()->create([
            'hash' => Str::random(22). strtotime(Carbon::now()),
            'body'=>$this->body,
        ]);
        $this->body="";
        $this->emit("statusUpdated", $status->id);
    }
    public function render()
    {
        return view('livewire.status.create');
    }
}
