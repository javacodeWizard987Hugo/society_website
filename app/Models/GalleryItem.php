<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GalleryItem extends Model
{
    protected $fillable = ['title', 'image', 'gallery_event_id'];

    public function event(): BelongsTo
    {
        return $this->belongsTo(GalleryEvent::class, 'gallery_event_id');
    }
}
