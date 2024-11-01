<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'team_id',
        'title',
        'slug',
        'description',
        'photo',
        'url_video',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'team_id' => 'integer',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'project_teams', 'project_id', 'user_id');
    }

    public function getPhotoAttribute($value)
    {
        return $value ? explode(',', $value) : []; // Convert to array
    }

    // Mutator to convert the array into a comma-separated string when saving the 'photo' attribute
    public function setPhotoAttribute($value)
    {
        $this->attributes['photo'] = is_array($value) ? implode(',', $value) : $value;
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
