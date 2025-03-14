<?php

namespace App\Models;

use Illuminate\Contracts\Mail\Attachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'salary',
        'location',
        'url',
        'tags',
        'schedule',
        'featured',
    ];
    /**
     * Get the employer that owns the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    /**
     * The tags that belong to the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function tag(string $name){
        $tag = Tag::firstOrCreate(['name' => $name]);
        $this->tags()->attach($tag);
    }

}
