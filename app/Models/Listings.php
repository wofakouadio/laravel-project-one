<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'company',
        'location',
        'website',
        'email',
        'description',
        'tags',
        'logo'
    ];

    public function scopeFilter($query, array $filters){
//        search by tags
        if($filters['tag'] ?? false){
            $query->where('tags', 'LIKE', '%'.request('tag').'%');
        }
//        search from search field by tag, title, description
        if($filters['search'] ?? false){
            $query->where('title', 'LIKE', '%'.request('search').'%')->orWhere('description', 'LIKE', '%'.request('search').'%')->orWhere('tags', 'LIKE', '%'.request('search').'%')->orWhere('company', 'LIKE', '%'.request('search').'%')->orWhere('location', 'LIKE', '%'.request('search').'%');
        }
    }

}
