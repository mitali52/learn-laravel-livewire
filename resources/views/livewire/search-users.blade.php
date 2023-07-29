<div>
    <input wire:model="searchTerm" type="text" placeholder="Search users..."/>

    <ul>
        @if($users->count() > 0)
            @foreach($users as $user)
                <li>{{ $user->fname }} {{ $user->lname }}</li>
            @endforeach
        @else
            <li>No users found.</li>
        @endif
    </ul>
</div>

