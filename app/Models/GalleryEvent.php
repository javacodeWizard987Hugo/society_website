<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GalleryEvent extends Model
{
    protected $fillable = ['name', 'event_date'];

    public function items(): HasMany
    {
        return $this->hasMany(GalleryItem::class);
    }
}
