@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('seat-plans.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.seat_plans.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.seat_plans.inputs.class_wise_seat_qty')</h5>
                    <span>{{ $seatPlan->class_wise_seat_qty ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.seat_plans.inputs.seat_quantity')</h5>
                    <span>{{ $seatPlan->seat_quantity ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('seat-plans.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\SeatPlan::class)
                <a
                    href="{{ route('seat-plans.create') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
