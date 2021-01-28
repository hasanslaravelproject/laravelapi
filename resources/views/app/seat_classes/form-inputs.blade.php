@php $editing = isset($seatClass) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="seat_plan_id" label="Seat Plan Id">
            @php $selected = old('seat_plan_id', ($editing ? $seatClass->seat_plan_id : '1')) @endphp
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="name"
            label="Name"
            value="{{ old('name', ($editing ? $seatClass->name : '')) }}"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="seat_color"
            label="Seat Color"
            value="{{ old('seat_color', ($editing ? $seatClass->seat_color : '')) }}"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>
