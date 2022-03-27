<div>
    <form wire:submit.prevent="signup" class="m-5">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input wire:model.lazy="name" type="text" class="form-control">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input wire:model.lazy="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input wire:model.lazy="password" type="password" class="form-control" id="exampleInputPassword1">
          @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="confirm_password" class="form-label">Confirm Password</label>
            <input wire:model.lazy="confirm_password" type="password" class="form-control" id="exampleInputPassword1">
            @error('confirm_password') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
   </form>
</div>
