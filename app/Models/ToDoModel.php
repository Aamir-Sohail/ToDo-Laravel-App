<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoModel extends Model
{
    use HasFactory;
    protected $table =('to_do_models');
    // protected $fillable =([
    //     'title',
    //     'description',
    //     'completed',
    //     'user_id',
    // ]);

    protected $guarded =[];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
