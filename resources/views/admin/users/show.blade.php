<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Admin - User Details') }}
            </h2>
            <a href="{{ route('admin.users.edit', $user) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                {{ __('Edit User') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-6">
                    <div>
                        <p class="text-sm text-gray-500">Name</p>
                        <p class="text-lg font-semibold text-gray-900">{{ $user->name }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Email</p>
                        <p class="text-lg font-semibold text-gray-900">{{ $user->email }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Status</p>
                        <span class="inline-flex rounded-full px-2.5 py-0.5 text-xs font-medium {{ $user->is_active ? 'bg-green-50 text-green-700' : 'bg-gray-100 text-gray-600' }}">
                            {{ $user->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Roles</p>
                        <div class="mt-2 flex flex-wrap gap-2">
                            @forelse ($user->roles as $role)
                                <span class="rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-700">
                                    {{ $role->name }}
                                </span>
                            @empty
                                <span class="text-sm text-gray-400">None</span>
                            @endforelse
                        </div>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Permissions</p>
                        <div class="mt-2 flex flex-wrap gap-2">
                            @forelse ($user->permissions as $permission)
                                <span class="rounded-full bg-indigo-50 px-2.5 py-0.5 text-xs font-medium text-indigo-700">
                                    {{ $permission->name }}
                                </span>
                            @empty
                                <span class="text-sm text-gray-400">None</span>
                            @endforelse
                        </div>
                    </div>

                    <div class="flex items-center justify-end gap-3">
                        <a href="{{ route('admin.users.index') }}" class="text-sm text-gray-500 hover:text-gray-700">
                            {{ __('Back to users') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
