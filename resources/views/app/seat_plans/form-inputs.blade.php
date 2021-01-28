@php $editing = isset($seatPlan) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="class_wise_seat_qty"
            label="Class Wise Seat Qty"
            value="{{ old('class_wise_seat_qty', ($editing ? $seatPlan->class_wise_seat_qty : '')) }}"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.number
            name="seat_quantity"
            label="Seat Quantity"
            value="{{ old('seat_quantity', ($editing ? $seatPlan->seat_quantity : '')) }}"
            max="255"
            required
        ></x-inputs.number>
    </x-inputs.group>
</div>
