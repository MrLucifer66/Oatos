<x-app-layout> <div class="container mx-auto px-4"> 
    <div class="bg-white rounded-lg shadow overflow-hidden"> 
        <div class="px-6 py-4 border-b border-gray-200 bg-gray-100"> 
            <h2 class="text-xl font-bold text-gray-800">Roles</h2> 
        </div> 
        <div class="p-6"> <a href="{{ route('roles.create') }}" class="px-4 py-2 font-semibold text-white bg-blue-500 rounded hover:bg-blue-600 focus:bg-blue-600"> Create Role </a>
    @if(session('success')) 
    <div class="mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert"> 
        <strong class="font-bold">Success!</strong> <span class="block sm:inline">{{ session('success') }}</span> 
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3"> 
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"> 
                <title>Close</title> 
                <path d="M14.348 5.652a1 1 0 0 0-1.414 0L10 8.586 6.066 4.652a1 1 0 1 0-1.414 1.414L8.586 10l-3.934 3.934a1 1 0 1 0 1.414 1.414L10 11.414l3.934 3.934a1 1 0 1 0 1.414-1.414L11.414 10l3.934-3.934a1 1 0 0 0 0-1.414z"/> 
            </svg> 
        </span> 
    </div> 
    @endif 
    
    <table class="table-auto w-full mt-4"> 
        <thead> 
            <tr> 
                <th class="px-4 py-2 bg-gray-200 text-gray-700 font-bold">Name</th> 
                <th class="px-4 py-2 bg-gray-200 text-gray-700 font-bold">Permissions</th> 
                <th class="px-4 py-2 bg-gray-200"></th> 
            </tr> 
        </thead> 
        
        <tbody> 
            @foreach($roles as $role) 
            <tr class="{{ $loop->even ? 'bg-gray-100' : ''}}"> 
                <td class="px-4 py-2">{{ $role->name }}</td> 
                <td class="px-4 py-2"> 
                    @foreach($role->permissions as $permission) 
                        <span class="bg-gray-200 text-gray-700 rounded-full px-2 py-1 text-xs font-semibold mr-1">{{ $permission->name }}</span>
                    @endforeach 
                </td> 
                <td class="px-4 py-2"> 
                    <a href="{{ route('roles.edit', $role->id) }}" class="inline-flex items-center px-4 py-2 font-semibold text-white bg-blue-500 rounded hover:bg-blue-600 focus:bg-blue-600"> 
                        <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> 
                            <path d="M15 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h10zM9 5H5v14h4V5zm6 0h-4v14h4V5z"/></svg> Edit 
                    </a> 
                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display: inline-block"> 
                        @csrf 
                        @method('DELETE') 
                        <button type="submit" onclick="return confirm('Are you sure to delete this role?')" class="inline-flex items-center px-4 py-2 font-semibold text-white bg-red-500 rounded hover:bg-red-600 focus:bg-red-600"> 
                            <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> 
                                <path d="M19 6a2 2 0 0 0-2-2h-5a2 2 0 0 0-2 2H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-2.586l2-2V8a2 2 0 0 0-2-2zM7 6h5v2H7V6zm10 12H7v-8h10v8z"/>
                            </svg> 
                            Delete 
                        </button> 
                    </form> 
                </td> 
            </tr> 
            @endforeach 
        </tbody> 
    </table> 
</div> 
</div> 
</div> 
</x-app-layout>