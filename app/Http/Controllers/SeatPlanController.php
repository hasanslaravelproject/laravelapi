<?php

namespace App\Http\Controllers;

use App\Models\SeatPlan;
use Illuminate\Http\Request;
use App\Http\Requests\SeatPlanStoreRequest;
use App\Http\Requests\SeatPlanUpdateRequest;

class SeatPlanController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', SeatPlan::class);

        $search = $request->get('search', '');

        $seatPlans = SeatPlan::search($search)
            ->latest()
            ->paginate(5);

        return view('app.seat_plans.index', compact('seatPlans', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', SeatPlan::class);

        return view('app.seat_plans.create');
    }

    /**
     * @param \App\Http\Requests\SeatPlanStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeatPlanStoreRequest $request)
    {
        $this->authorize('create', SeatPlan::class);

        $validated = $request->validated();

        $seatPlan = SeatPlan::create($validated);

        return redirect()
            ->route('seat-plans.edit', $seatPlan)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\SeatPlan $seatPlan
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, SeatPlan $seatPlan)
    {
        $this->authorize('view', $seatPlan);

        return view('app.seat_plans.show', compact('seatPlan'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\SeatPlan $seatPlan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, SeatPlan $seatPlan)
    {
        $this->authorize('update', $seatPlan);

        return view('app.seat_plans.edit', compact('seatPlan'));
    }

    /**
     * @param \App\Http\Requests\SeatPlanUpdateRequest $request
     * @param \App\Models\SeatPlan $seatPlan
     * @return \Illuminate\Http\Response
     */
    public function update(SeatPlanUpdateRequest $request, SeatPlan $seatPlan)
    {
        $this->authorize('update', $seatPlan);

        $validated = $request->validated();

        $seatPlan->update($validated);

        return redirect()
            ->route('seat-plans.edit', $seatPlan)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\SeatPlan $seatPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, SeatPlan $seatPlan)
    {
        $this->authorize('delete', $seatPlan);

        $seatPlan->delete();

        return redirect()
            ->route('seat-plans.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
