<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AdminUser;
use App\Models\Customer;
use App\Models\Comment;

class CommentCreate extends Component
{
	public $types=['admin','customer'];
	public $array=['admin'=>'App\Models\AdminUser',
                        'customer'=>'App\Models\Customer',];
	public $type;
	public $comments;
	public $user_id='';
	public $users=[];
	public $commentlist=[];
	public $message;

	 public function change()
    {
    	if($this->type=='admin')
    	$this->users=AdminUser::get();
        else
    	$this->users=Customer::get();
      //dd($this->type);
    }

    public function submit()
    {
        $validatedData = $this->validate(
            [
                'user_id' => 'required',
                'type' => 'required',
                'comments' => 'required',
            
            ],
            [
                'user_id.required' => 'Please Enter your :attribute.',
                'type.required' => 'Please Enter your :attribute.',
                'comments.required' => 'Please Enter your :attribute.',

         
            ],
        );
       
                   
                    
        $create=[
                'entity_id'=>$this->user_id,
                'entity_type'=>$this->array[$this->type],
                'type'=>$this->type,
                'comments'=>$this->comments,
              ];

              //dd($create);
        Comment::create($create);

        //$comments=Comment::first();

        $this->commentlist=Comment::latest()->get();

        $this->clearFields();
        //dd($comments->entity);
  
        //return redirect()->to('/form');
    }

    public function clearFields()
    {
    	$this->commentlist=Comment::latest()->get();
    	$this->type='';
    	$this->user_id='';
    	$this->comments='';

    }

    public function render()
    {
    	$this->commentlist=Comment::latest()->get();
        return view('livewire.comment-create',
        	[
        	'types'=>$this->types,
        	'users'=>$this->users,
        	'commentlist'=>$this->commentlist
        ]);
    }
}
