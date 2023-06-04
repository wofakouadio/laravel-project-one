<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    use HasFactory;

    public static function all($columns = ['*'])
    {
        return parent::all($columns);
    }

    public static function find($id){
        $listings = self::all();
        foreach ($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
}
