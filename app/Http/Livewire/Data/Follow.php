<?php

namespace App\Http\Livewire\Data;

use Livewire\Component;
use App\Models\User;
use App\Models\Status;
class Follow extends Component
{
    public $searchTerm;
    protected $listeners =['yo'];
    public function yo(){}
    public function render()
    {
       // $status = Status::whereIn('user_id', $ids)->with('user')->latest()->paginate($this->perPage);
       $user=User::where('hash', auth()->user()->hash)->orWhere('username', auth()->user()->username)->firstOrFail();
       $follows= $user->follows()->get();
       $followers = $user->followers()->get();
       $searchTerm= '%'.$this->searchTerm.'%';
       $search= '%'.''.'%';

           $result=User::where('name','like', $searchTerm)->get();


        return view('livewire.data.follow',[
            'result'=>  $result,
            'follows' =>$follows,
            'followers' => $followers
        ]);
    }
}
