<h1>Edit User</h1>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
    </div>

    <div class="form-group">
        <label for="role">Role:</label>
        <select id="role" name="role" class="form-control">
            @foreach($roles as $role)
                <option value="{{ $role->name }}" @if($user->hasRole($role)) selected @endif>{{ $role->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update User</button>
</form>