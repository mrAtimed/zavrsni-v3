<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NavMenu extends Model
{
    use HasFactory, SoftDeletes;
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
