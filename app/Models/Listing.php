<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        // do nothing if there aren't any tags
        if ($filters['tag'] ?? false) {
            // search in database table
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
    }
}
