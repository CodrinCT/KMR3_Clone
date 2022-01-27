<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentLocations extends Model
{
    use HasFactory;

    public function equipmentCategories()
    {
        return $this->hasMany(EquipmentCategory::class, 'id_location', 'id');
    }

    public function location()
    {
        return $this->belongsTo(Locations::class, 'id_location', 'id');
    }

}
