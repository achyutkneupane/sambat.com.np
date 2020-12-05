<div class="sidebar text-right">
        <div class="sideLinks" wire:click="$emit('catSelect', 'all')">
            <div class="text">
                <a>
                    Home
                </a>
            </div>
        </div>

        @foreach($cats as $cat)
<div class="sideLinks" wire:click="$emit('catSelect', {{ $cat->id }})">
            <div class="text">
                <a>
                    {{ $cat->title }}
                </a>
            </div>
        </div>
        @endforeach
    </div>