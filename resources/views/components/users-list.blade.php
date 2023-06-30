<div class="overflow-x-auto">
  <table class="mx-auto max-w-xs sm:max-w-none w-full whitespace-nowrap rounded-lg overflow-hidden shadow-sm bg-white">
      <thead class="bg-gray-100">
          <tr class="text-left">
              <th class="px-4 py-2 text-gray-600 font-medium text-sm uppercase tracking-wider">Avatar</th>
              <th class="px-4 py-2 text-gray-600 font-medium text-sm uppercase tracking-wider">Name</th>
              <th class="px-4 py-2 text-gray-600 font-medium text-sm uppercase tracking-wider">Email</th>
              <th class="px-4 py-2 text-gray-600 font-medium text-sm uppercase tracking-wider">Roles</th>
              <th class="px-4 py-2 text-gray-600 font-medium text-sm uppercase tracking-wider">Registered</th>
              <th class="px-4 py-2 text-gray-600 font-medium text-sm uppercase tracking-wider">Actions</th>
          </tr>
      </thead>
      <tbody>
          @foreach($users as $user)
          <tr class="bg-gray-100 hover:bg-gray-200">
              <td class="px-4 py-2 border"><img src="{{ Storage::url('users-avatar/' . $user->avatar) }}" alt="Avatar" class="h-20 w-20 rounded-full"></td>
              <td class="px-4 py-2 border">{{ $user->name }}</td>
              <td class="px-4 py-2 border">{{ $user->email }}</td>
              <td class="px-4 py-2 border">{{ implode(', ', $user->roles->pluck('name')->toArray()) }}</td>
              <td class="px-4 py-2 border">{{ $user->created_at }}</td>
              <td class="px-4 py-2 border">
                  <div class="flex items-center">
                      <a href="{{ route('users.edit', $user->id) }}" class="text-green-600 hover:text-green-900 mr-2">Edit</a>
                  </div>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>

</div>