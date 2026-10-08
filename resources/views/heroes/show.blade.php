<x-layout>
    <h2>{{  $hero->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p>Attributes: {{  $hero->attributes }}</p>
        <p>Size: {{ $hero->size }}</p>
        <p>Move: {{ $hero->move }}</p>
        <p>Agility: {{ $hero->agility }}</p>
        <p>Defence: {{ $hero->defence }}</p>
        <p>Vitality: {{ $hero->vitality }}</p>
        <p>Wounds: {{ $hero->wounds }}</p>
        <p>Weapons: {{ $hero->weapons }}</p>
        <p>Dice: {{ $hero->dice }}</p>
        <p>Abilities: {{ $hero->abilities }}</p>
        <p>Inspiration: {{ $hero->inspiration }}</p>
    </div>

    <form action="{{ route('heroes.destroy', $hero->id) }}" method="POST"
        onsubmit="return confirm('Are you sure you want to delete this hero?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn my-4">Delete Hero</button>
    </form>

</x-layout>