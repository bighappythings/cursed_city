<x-layout>

    <form action=" {{ route('enemies.store') }}" method="POST">
        @csrf

        <h2>Create New Enemy</h2>

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>

        <label for="move">Move:</label>
        <input type="number" name="move" id="move" value="{{ old('move') }}">

        <label for="Wounds">Wounds:</label>
        <input type="number" name="wounds" id="wounds" value="{{ old('wounds') }}" required>


        <label for="Size">Size:</label>
        <input type="text" name="size" id="size" value="{{ old('size') }}">

        <label for="Weapons">Weapons:</label>
        <input type="text" name="weapons" id="weapons" value="{{ old('weapons') }}">

        <label for="Dice">Dice:</label>
        <input type="text" name="dice" id="dice" value="{{ old('dice') }}">

        <label for="Damage">Damage:</label>
        <input type="text" name="damage" id="damage" value="{{ old('damage') }}">

        <label for="SpecialRules">Special Rules:</label>
        <input type="text" name="specialRules" id="specialRules" value="{{ old('specialRules') }}">

        <label for="Behaviours">Behaviours:</label>
        <input type="text" name="behaviours" id="behaviours" value="{{ old('behaviours') }}">

        <label for="Bio">Bio:</label>
        <textarea rows="5" name="bio" id="bio">{{ old('bio') }}</textarea>

        <label for="type_id">Type:</label>
        <select id="type_id" name="type_id" required>
            <option value="" disabled selected>Select a type</option>
            @foreach ($types as $type)
                <option value="{{ $type->id }}" {{ $type->id == old('type_id') ? 'selected' : '' }}>
                    {{ $type->name }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-green">Create Enemy</button>

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