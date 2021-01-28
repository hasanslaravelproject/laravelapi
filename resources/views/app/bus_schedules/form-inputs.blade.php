@php $editing = isset($busSchedule) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.datetime
            name="date"
            label="Date"
            value="{{ old('date', ($editing ? optional($busSchedule->date)->format('Y-m-d\TG:i:s') : '')) }}"
            max="255"
            required
        ></x-inputs.datetime>
    </x-inputs.group>
</div>
