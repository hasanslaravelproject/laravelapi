<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bus extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'model',
        'image',
        'seat_plan_id',
        'company_id',
        'bus_route_id',
        'bus_number',
    ];

    protected $searchableFields = ['*'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function busRoute()
    {
        return $this->belongsTo(BusRoute::class);
    }

    public function seatPlan()
    {
        return $this->belongsTo(SeatPlan::class);
    }
}
