<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BusRoute extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [];

    protected $searchableFields = ['*'];

    protected $table = 'bus_routes';

    public function buses()
    {
        return $this->hasMany(Bus::class);
    }
}
