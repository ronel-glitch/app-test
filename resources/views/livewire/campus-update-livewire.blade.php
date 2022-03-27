<div>
    <form wire:submit.prevent="save" class="card card-body m-5">
        <h1>
            Update Campus
        </h1>
        <div class="mb-3">
            <label for="campus" class="form-label">Campus</label>
            <input wire:model.lazy="campus_name" type="text" class="form-control" id="campus" >
            @error('campus_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input wire:model.lazy="address" type="text" class="form-control" id="campus" >
            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-success">
            Update
        </button>
    </form>
</div>
