<x-layout>
    <x-slot name="title">
        User Profile
    </x-slot>

    <h1 class="text-2xl font-bold mb-4">User Profile</h1>

    <div class="bg-white shadow-md rounded p-6">
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Joined:</strong> {{ $user->created_at->format('F j, Y') }}</p>
    </div>
    <div class="mt-6">
        <a href="{{ route('profile.edit') }}" class="text-blue-500 hover:underline">Edit Profile</a>
    </div>
</x-layout>
