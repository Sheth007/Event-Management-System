<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class events extends Model
{
    use Searchable;

    protected $fillable = [
        'title',
        'description',
        'category_id',
        'date',
        'time',
        'location',
        'image',
        'created_at',
        'updated_at'
    ];

    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'date' => $this->date,
            'time' => $this->time,
            'location' => $this->location,
            'image' => $this->image,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
        // throw new \Exception('Not implemented');
    }
}
