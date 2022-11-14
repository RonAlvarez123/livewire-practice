<div>
    <div class="flex flex-col gap-6 w-[480px] mx-auto py-16">
        <select wire:model="selectedContinent" wire:change="getCountriesForSelectedContinent">
            <option value="0">--Please select a continent--</option>
            @foreach ($continents as $continent)
                <option value="{{ $continent->id }}">{{ $continent->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="flex flex-col gap-6 w-[480px] mx-auto py-16">
        <select wire:model="selectedCountry">
            @if ($selectedContinent == 0)
                <option value="0">--Please select a country--</option>
            @endif
            @foreach ($countries as $country)
                <option value="{{ $country->name }}">{{ $country->name }}</option>
            @endforeach
        </select>
    </div>
</div>
