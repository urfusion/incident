<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Incident extends Model {

    public $timestamps = false;
    protected $fillable = [
        'location', 'title', 'category_id', 'people', 'comments', 'incidentDate', 'createDate', 'modifyDate'
    ];
    protected $casts = [
        'location' => 'array',
        'people' => 'array',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function getLocationAttribute($value) {
        return json_decode($value);
    }

    public function getPeopleAttribute($value) {
        return json_decode($value);
    }

    public function setLocationAttribute($value) {
        $this->attributes['location'] = json_encode($value);
    }

    public function setPeopleAttribute($value) {
        $this->attributes['people'] = json_encode($value);
    }

}
