<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SeatPlan extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['class_wise_seat_qty', 'seat_quantity'];

    protected $searchableFields = ['*'];

    protected $table = 'seat_plans';

    public function seatClasses()
    {
        return $this->hasMany(SeatClass::class);
    }

    public function buses()
    {
        return $this->hasMany(Bus::class);
    }
}
