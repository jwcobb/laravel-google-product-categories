<?php

namespace JWCobb\LaravelGoogleProductCategories\Models;

use Illuminate\Database\Eloquent\Model;

class GoogleProductCategory extends Model
{
    protected $fillable = [
        'extended_name',
        'id',
        'name',
        'parent_id',
        'slug',
    ];

    protected $casts = [
        'extended_name' => 'string',
        'id' => 'integer',
        'name' => 'string',
        'parent_id' => 'integer',
        'slug' => 'string',
    ];

    public function parent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(__CLASS__, 'parent_id');
    }

    public function children(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(__CLASS__, 'parent_id');
    }
}
