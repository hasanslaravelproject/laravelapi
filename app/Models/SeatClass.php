<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SeatClass extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'seat_color', 'seat_plan_id'];

    protected $searchableFields = ['*'];

    protected $table = 'seat_classes';

    public function seatPlan()
    {
        return $this->belongsTo(SeatPlan::class);
    }
}
