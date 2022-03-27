<div>
    <form wire:submit.prevent="login" class="m-5">
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
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('signup') }}">Register Now</a>
        <br>
        @if (session()->has('danger'))
            <div class="alert alert-danger" role="alert">
               {{ session('danger') }}
            </div>
        @endif
   </form>
</div>
