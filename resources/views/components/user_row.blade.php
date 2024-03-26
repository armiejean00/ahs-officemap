@props(['user'])

<tr>
    <td>{{ $user->username }}</td>

    <td class="hidden md:table-cell">{{ $user->first_name . ' ' . $user->last_name }}</td>

    <td class="hidden lg:table-cell">{{ $user->email }}</td>

    <td class="hidden md:table-cell">
        @if ($user->role === 'user')
            User
        @elseif ($user->role === 'office_manager')
            Office Manager
        @elseif ($user->role === 'admin')
            <span class="status bg-cornflowerBlue !text-black">Admin</span>
        @endif
    </td>

    <td>
        @unless ($user->role === 'admin')
            <a href="/users/{{ $user->id }}/edit">
                <span class="status bg-yellow-800">Edit</span>
            </a>
            {{-- <span class="status cancelled">Delete</span> --}}
            @if (auth()->user()->role == 'admin')
            <form method="POST" action="/users/{{ $user->id }}" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button class="status bg-dangerRed !text-white">Delete</button>
            </form>
            @endif
            <form method="POST" action="/users/{{ $user->id }}" style="display: inline-block">
                @csrf
                @method('PUT')
                @if ($user->is_approved === 0)
                    <button class="status bg-darkOlive">Approve</button>
                @elseif ($user->is_approved === 1)
                    <button class="status bg-mulberryWood">Put On Hold</button>
                @endif
            </form>
        @else
            No Action.
        @endunless
    </td>
</tr>
