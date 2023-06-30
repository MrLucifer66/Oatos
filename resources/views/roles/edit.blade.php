<div class="container">
    <div class="card">
        <div class="card-header">Edit Role</div>
        <div class="card-body">
            <form action="{{ route('roles.update', $role->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $role->name }}" required>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="permissions">Permissions:</label>
                    <select name="permissions[]" id="permissions" class="form-control selectpicker" multiple data-live-search="true" data-selected-text-format="count > 2">
                        @foreach($permissions as $permission)
                            <option value="{{ $permission->id }}" @if($role->permissions->contains($permission)) selected @endif>{{ $permission->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update Role</button>
            </form>
        </div>
    </div>
</div>
@push('scripts')
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
@endpush

@push('styles')
<link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet">
@endpush