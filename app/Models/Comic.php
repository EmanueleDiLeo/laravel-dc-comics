<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comic extends Model
{
    use HasFactory;

    //si usa per lo store sul ComicController
    protected $fillable = ['title','description','thumb','price','series','sale_date','type','slug'];


    // Genera lo slug
    public static function generateSlug($string){

        $slug =  Str::slug($string, '-');
        $original_slug = $slug;

        $exists = Comic::where('slug', $slug)->first();
        $c = 1;

        while($exists){
            $slug = $original_slug. '-'. $c;
            $exists = Comic::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }
}
