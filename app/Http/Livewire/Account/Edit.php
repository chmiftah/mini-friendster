<?php

namespace App\Http\Livewire\Account;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
 use WithFileUploads;
    public $name;
    public $username ;
    public $picture ;
    public $description ;

    public function mount(){

        $this->name= auth()->user()->name;
        $this->username= auth()->user()->username;
        $this->description= auth()->user()->description;
    }

    public function updated($field){
    $this->validateOnly($field,[
        'username'=>'min:3|max:25|unique:users,username' ,
        'name'=> 'min:3|string'
    ]);
    }
    public function update()
    {
        $this->validate([
            'picture'=> $this->picture ? 'image|mimes:jpg,jpeg,png' : '',
            'username'=>'required|min:3|max:25|unique:users,username' ,
            'name'=> 'required|min:3|string'
        ]);

        if($this->picture){
            \Storage::delete(auth()->user()->picture);
            $picture=$this->picture->store('images/profile');
        }else{
            $picture = auth()->user()->picture ?? null;
        }
   //     $picture=$this->picture ? $this->picture->store('images/profile') : null;

        auth()->user()->update([
            'name'=>$this->name,
            'username'=>$this->username,
            'picture'=>$picture,
            'description'=>$this->description
        ]);
        $identifier= auth()->user()->usernameOrHash;
        return redirect()->to('user/'.$identifier);

    }
    public function render()
    {
        return view('livewire.account.edit')->extends('layouts.app');
    }


}
