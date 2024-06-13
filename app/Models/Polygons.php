<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Polygons extends Model
{
    use HasFactory;

    protected $table = 'table_polygons';

    protected $guarded = ['id']; //yg tidak boleh diubah hanya kolom id

    public function polygons() {
        return $this->select(DB::raw('id, name, description, image,
    ST_AsGeoJSON(geom) as geom, created_at, updated_at'))->get();
    }
    
    public function polygon($id) {
        return $this->select(DB::raw('id, name, description, image,
    ST_AsGeoJSON(geom) as geom, created_at, updated_at'))->where('id', $id)->get();
    }
}
