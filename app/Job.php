<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function TypeJob()
    {
        return $this->belongsTo(TypeJob::class, 'type_job_id');
    }

    public function Category()
    {
        return $this->belongsToMany(Category::class, 'job_categories', 'job_id');
    }
}
