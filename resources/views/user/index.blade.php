<x-layout>
    <x-slot name="heading">
        <h1>Users Management</h1>
    </x-slot>

    <div class="container mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['gender'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No users found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout>