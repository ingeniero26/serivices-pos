<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CategoryModel extends Model
{
    use HasFactory;
    protected $table = 'categories';
   static public  function getCategory()
    {
        $return = self::select('categories.*', 'users.name as created_by_name')
            ->join('users', 'users.id', 'categories.created_by');

        $return = $return->where('categories.is_delete', '=', 0)

            ->orderBy('categories.id', 'desc')
            ->paginate(20);
        return $return;

    }

    static public  function getSingle($id)
    {
        return self::find($id);
    }
}
