<div class="grid gap-2">
    <x-input label="Training Program"/>
    <div class="grid grid-cols-2 gap-2">
        <x-input label="Training Date start" type="date"/>
        <x-input label="Training Date end" type="date"/>
        <x-input label="Training Duration" type="number" suffix="Hours"/>
        <x-input label="Training Venue"/>
    </div>
    <div class="grid grid-cols-2 gap-2">
        <x-input label="Training Lecturer"/>
        <x-input label="Training Institution"/>
    </div>

    <x-textarea wire:model="comment" label="Hightlihts of training program/seminar" placeholder="Your comment" />

    <x-textarea wire:model="comment" label="Applic ation of new learning on the job" placeholder="Your comment" />

    <div>
        <x-button primary label="Submit" />
    </div>

</div>
