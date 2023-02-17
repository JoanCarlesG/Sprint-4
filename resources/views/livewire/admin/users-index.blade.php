<div class="flex flex-col">

    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="table-header pl-8 mt-2 w-72">
            <input wire:model="search" type="text" class="form-control border p-2 w-full" placeholder="Name or email">
        </div>
        <br>
        <div class="py-4 inline-block sm:px-6 lg:px-8 ">

            <div class="overflow-hidden">
                @if (count($users) > 0)

                <table class="text-center">
                    <thead class="border-b bg-gray-800">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                ID
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                Name
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                Email
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                Roles
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                Actions
                            </th>
                        </tr>
                    </thead class="border-b">
                    <tbody>
                        @foreach ($users as $user)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $user->user_id }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $user->name }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $user->email }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $user->roles->last()->name }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                <a class="" href="{{route('user.edit', $user)}}">Edit</a>
                            </td>

                        </tr class="bg-white border-b">
                        @endforeach

                    </tbody>
                </table>

                @else
                <div class="text-center">
                    <h1 class="text-xl font-bold text-gray-800">No users found</h1>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>