<?php

namespace App\Http\Livewire\Status;

use Livewire\Component;
use App\Models\Status;

class Index extends Component
{
    public $statusId;
    public $perPage = 5;
    // }

    protected $listeners= [
        "statusUpdated" , 'cari'
    ];
    public function cari(){}
public function statusUpdated($statusId){}
    public function loadmore()
    {
        sleep(1);
        $this->perPage+=10;
    }
    public function render()
    {
        $ids= auth()->user()->follows()->pluck('id');
        $ids->push(auth()->id());
        $statuses = Status::whereIn('user_id', $ids)->with('user')->latest()->paginate($this->perPage);
       // $statuses = auth()->user()->statuses()->paginate(10);
        return view('livewire.status.index',
            compact('statuses')
            );
    }
}
