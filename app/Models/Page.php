<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'slug'];

    public function blocks()
    {
        return $this->hasMany(PageBlock::class)->orderBy('order');
    }
}
