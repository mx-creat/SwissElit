<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'slug', 'description', 'type', 'price_start', 'is_active'];

    // Pour récupérer uniquement la maintenance
    public function scopeMaintenance($query) {
        return $query->where('type', 'maintenance');
    }

    // Pour récupérer uniquement la création
    public function scopeCreation($query) {
        return $query->where('type', 'creation');
    }
}
