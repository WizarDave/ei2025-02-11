<!-- You can open the modal using ID.showModal() method -->
<button class="btn" wire:click="$emit('showModal', '{{ $id }}')">{{ $buttonText }}</button>
<dialog id="{{ $id }}" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button wire:click="$emit('closeModal', '{{ $id }}')" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="font-bold text-lg">{{ $title }}</h3>
        <p class="py-4">{{ $description }}</p>
        <slot/>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
