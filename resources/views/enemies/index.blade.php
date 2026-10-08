<x-layout>
    <h2>Enemies Not Yet Slain</h2>

    <ul>
        @foreach($enemies as $enemy)
            <li>
                <x-card href="/enemies/{{ $enemy['id'] }}" :highlight="$enemy['move'] > 2">
                    <h3>{{  $enemy["name"] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>