<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Article
 * @package App\Models
 * @version June 13, 2021, 11:47 am UTC
 *
 * @property string $title
 * @property string $content
 */
class Article extends Model
{


    public $table = 'articles';
    



    public $fillable = [
        'title',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string'
    ];

    
}
