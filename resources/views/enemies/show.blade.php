<x-layout>
    <h2>{{  $enemy->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Type:</strong> {{ $enemy->type->name }}</p>
        <p><strong>Move:</strong> {{ $enemy->move }}</p>
        <p><strong>Wounds:</strong> {{ $enemy->wounds }}</p>
        <p><strong>Size:</strong> {{ $enemy->size }}</p>
        <p><strong>Weapons:</strong> {{ $enemy->weapons }}</p>
        <p><strong>Dice:</strong> {{ $enemy->dice }}</p>
        <p><strong>Damage:</strong> {{ $enemy->damage }}</p>
        <p><strong>Special Rules:</strong> {{ $enemy->special_rules }}</p>
        <p><strong>Behaviours:</strong> {{ $enemy->behaviours }}</p>
        <p><strong>Bio:</strong> {{ $enemy->bio }}</p>
    </div>

    <!--type info-->
    <div class="border-2 bg-white px-4 b4-4 my-4 rounded">
        <h3>Enemy Type Information</h3>
        <p><strong>Enemy Type:</strong> {{ $enemy->type->name }}</p>
        <p><strong>Type Attributes:</strong> {{ $enemy->type->attributes }}</p>
        <p><strong>Type Description:</strong></p>
        <p>{{ $enemy->type->description }}</p>
    </div>

    <form action="{{ route('enemies.destroy', $enemy->id) }}" method="POST"
        onsubmit="return confirm('Are you sure you want to delete this enemy?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn my-4">Delete Enemy</button>

</x-layout>