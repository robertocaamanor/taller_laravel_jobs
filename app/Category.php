<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Jobs()
    {
        return $this->belongsToMany(Category::class, 'job_categories', 'job_id');
    }
}
