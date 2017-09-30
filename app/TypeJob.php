<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeJob extends Model
{
    public function Jobs()
    {
        return $this->hasMany(Job::class, 'job_categories', 'category_id');
    }
}
