<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Format CreatedAtDate
    public function getCreatedAtAttribute($date)
    {
    return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d/m/Y à H:i');
    }

    // Use slug for Post
    public function getRouteKeyName(){
        return 'slug';
    }

}
