<?php

namespace App\Http\Livewire\Comment;

use Livewire\Component;
use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Index extends Component
{
    public $body;
    public $commentId;
    public $listeners = ['commentAdded'];

    public $status;
    public $commentParentId;
    protected $withCount = ['children'];
    public function mount($status)
    {
        $this->status= $status;

    }
    public function commentAdded($commentId){

    }
    public function show($id)
    {
      //  dd($id);
      $this->commentParentId =$id;
      $username= Comment::find($this->commentParentId)->user->usernameOrHash;
      $this->body ="@{$username} ";
    }
    public function reply()
    {
        $this->validate([
            'body'=>'required'
        ]);
        auth()->user()->comments()->create([
            'parent_id' => $this->commentParentId ?? null,
            'status_id'=>$this->status->id,
            'body'=>$this->body,
            'hash'=>Str::random(22), strtotime(Carbon::now()),

        ]);
        $this->body= '';
    }
    public function render()
    {
        $comments = $this->status->comments()->where('parent_id', null)->withCount('children')->get();
        return view('livewire.comment.index',compact('comments'));
    }
}
