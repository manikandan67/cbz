

<div>
  <form wire:submit.prevent="submit">

     <label for="type">Type</label>
    <select id="type" name="type" wire:model="type" wire:change="change" >
    	<option value="">Select Type</option>
    @foreach($types as $type)
      <option value="{{$type}}">{{$type}}</option>
      
      @endforeach
    </select>
     @error('type')
            <p style="color:red">{{ $message }}</p>
        @enderror

    <label for="user_id">Users</label>
    <select id="user_id" name="user_id" wire:model="user_id">
    	<option value="">Select User</option>
    	  @foreach($users as $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
  
    </select>

     @error('user_id')
            <p style="color:red">{{ $message }}</p>
        @enderror

    

      <label for="lname">Comments</label>
    <input type="text" wire:model="comments"  placeholder="Your Comments..">

     @error('comments')
            <p style="color:red">{{ $message }}</p>
        @enderror

  
    <input type="submit" value="Submit">
  </form>

  <div class="w3-container">
  <h2>Comment list</h2>
  
  <ul class="w3-ul w3-card-4">

  	@foreach($commentlist as $list)
    <li class="w3-bar">
      
      <img src="https://www.w3schools.com/w3css/img_avatar5.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large">{{ucfirst($list->entity->name)}} - {{ucfirst($list->type)}}</span><br>
        <span>{{$list->comments}}</span>
      </div>
    </li>
    @endforeach

    
  </ul>
</div>
</div>