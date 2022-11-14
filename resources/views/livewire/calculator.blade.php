<div>
    <div class="flex flex-col items-center">
        <div class="flex p-16 mx-auto justify-center items-center gap-4">
            <input type="number" wire:model="num1" placeholder="Number 1">
            <select class="w-24" wire:model="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
            <input type="number" wire:model="num2" placeholder="Number 2">
            <button wire:click="calculate"
                class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white"
                {{ $disabled ? 'disabled' : '' }}>Calculate</button>
        </div>
        <p class="text-3xl">{{ $result }}</p>
    </div>
</div>
