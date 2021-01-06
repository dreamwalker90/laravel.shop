<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'title_fa'];

    public static function search($data)
    {
        $category = Category::orderby('id', 'DESC');
        if (sizeof($data) > 0) {
            if (array_key_exists('title', $data) && array_key_exists('title_fa', $data)) {
                $category = $category->where('title', 'like', '%' . $data['title'] . '%')
                    ->where('title_fa', 'like', '%' . $data['title_fa'] . '%');
            }

        }
        $category = $category->paginate(10);
        return $category;

    }
}
