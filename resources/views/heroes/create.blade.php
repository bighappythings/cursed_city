<x-layout>
    <h2>Create New Hero</h2>

    <form action="{{ route('heroes.store') }}" method="POST">
        @csrf

        <!-- Hero Name -->
        <label for="name">Hero Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>

        <!-- Hero Attributes -->
        <label for="attributes">Hero Attributes:</label>
        <input type="text" id="attributes" name="attributes" value="{{ old('attributes') }}" required>

        <!-- Hero Size -->
        <label for="size">Hero Size:</label>
        <input type="text" id="size" name="size" value="{{ old('size') }}" required>

        <label for="move">Hero Move:</label>
        <input type="text" id="move" name="move" value="{{ old('move') }}" required>

        <label for="agility">Hero Agility:</label>
        <input type="text" id="agility" name="agility" value="{{ old('agility') }}" required>

        <label for="defence">Hero Defence:</label>
        <input type="text" id="defence" name="defence" value="{{ old('defence') }}" required>

        <label for="vitality">Hero Vitality:</label>
        <input type="text" id="vitality" name="vitality" value="{{ old('vitality') }}" required>

        <!-- Hero Wounds -->
        <label for="wounds">Hero Wounds:</label>
        <input type="text" id="wounds" name="wounds" value="{{ old('wounds') }}" required>

        <!-- Hero Weapons -->
        <label for="weapons">Hero Weapons:</label>
        <input type="text" id="weapons" name="weapons" value="{{ old('weapons') }}" required>

        <label for="abilities">Hero Abilities:</label>
        <input type="text" id="abilities" name="abilities" value="{{ old('abilities') }}" required>

        <label for="inspiration">Hero Inspiration:</label>
        <input type="text" id="inspiration" name="inspiration" value="{{ old('inspiration') }}" required>

        <button type="submit" class="btn mt-4">Create Hero</button>

        <!-- validation errors -->
        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach ($errors->all() as $error)
                    <li class="my-2 text-red-500">{{ $error }}</li>
                @endforeach
            </ul>

        @endif

    </form>
</x-layout>