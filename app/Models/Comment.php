<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable=['entity_id','entity_type','type','comments'];

    public function entity()
    {
        return $this->morphTo();
    }
}
