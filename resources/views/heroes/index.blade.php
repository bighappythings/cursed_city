<x-layout>

    <h2>Currently available heroes</h2>

    <ul>
        @foreach($heroes as $hero)
            <li>
                <x-card href="/heroes/{{ $hero->id }}">
                    <div>
                        <h3>{{ $hero->name }}</h3>
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
                </x-card>
            </li>
        @endforeach
    </ul>

    {{ $heroes->links() }}
</x-layout>