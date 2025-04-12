<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageBlock extends Model
{
    protected $fillable = ['page_id', 'type', 'settings', 'order'];

    protected $casts = [
        'settings' => 'array',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
