<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'project_id', 'completed'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
