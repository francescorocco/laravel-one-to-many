<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'languages',
        'slug',
        'type_id'
    ];

    public static function generateSlug(string $title) {
        return Str::slug($title, '-');
    }

    public function types(){
        return $this->belongsTo(Type::class);
    }
}
