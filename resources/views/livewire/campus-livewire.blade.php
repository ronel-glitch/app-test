<div>
    <div class="card card-body m-5">
        <div class="d-flex">
            <input wire:model="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <a href="{{ route('campus.create') }}" class="btn btn-success">
                Create
            </a>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Campus</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($campuses as $campus)
                    <tr id="{{ $campus->id }}">
                        <th scope="row">{{ $campus->id }}</th>
                        <td>{{ $campus->campus_name }}</td>
                        <td>{{ $campus->address }}</td>
                        <td class="py-1">
                            <a href="{{ route('campus.update', ['campus'=>$campus->id]) }}" class="btn btn-sm btn-primary">
                                Update
                            </a>
                            <button wire:click="delete({{ $campus->id }})" class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $campuses->links() }}

        @if (session()->has('success'))
            <div class="alert alert-success mt-5">
                {{ session('success') }}
            </div>
        @endif

        @if (session()->has('danger'))
            <div class="alert alert-danger mt-5">
                {{ session('danger') }}
            </div>
        @endif
    </div>
</div>
