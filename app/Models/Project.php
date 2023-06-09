<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';  

    protected $fillable = [
        'project_name',
        'project_description',
        'project_price',
        'included_tasks',
        'start_date',
        'end_date'
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'user_project', 'project_id')->withPivot('permission');
    }

    


}
