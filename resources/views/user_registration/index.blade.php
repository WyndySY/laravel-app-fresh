<x-layout>
    
    <div class="max-w-5xl mx-auto mt-10 bg-gray-900 text-white rounded-2xl shadow-lg p-6">

        <div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-semibold">
        Users List
    </h2>

    <a href="/register/create"
       class="bg-indigo-600 hover:bg-indigo-500 px-4 py-2 rounded-lg text-sm">
        + Create User
    </a>
</div>

        <table class="w-full border-collapse">
            <thead>
                <tr class="text-left text-gray-400 border-b border-gray-700">
                    <th class="py-3">First Name</th>
                    <th class="py-3">Last Name</th>
                    <th class="py-3">Email</th>
                    <th class="py-3">Age</th>
                    <th class="py-3">Address</th>
                    <th class="py-3 text-right">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-700">

                @foreach ($users as $user)
                    <tr class="hover:bg-gray-800 transition">
                        <td class="py-3">{{ $user->first_name }}</td>
                        <td class="py-3">{{ $user->last_name }}</td>
                        <td class="py-3">{{ $user->email }}</td>
                        <td class="py-3">{{ $user->age }}</td>
                        <td class="py-3">{{ $user->address }}</td>
                        <td class="py-3 text-right space-x-2">
    <a href="/register/show/{{ $user->id }}"
       class="bg-blue-600 hover:bg-blue-500 px-3 py-1 rounded text-sm">
        View
    </a>

        <form action="/register/delete/{{ $user->id }}" method="POST" class="inline">
        @csrf
        @method('DELETE')

        <button onclick="return confirm('Delete this user?')"
                class="bg-red-600 hover:bg-red-500 px-3 py-1 rounded text-sm">
            Delete
        </button>
    </form>

</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</x-layout>