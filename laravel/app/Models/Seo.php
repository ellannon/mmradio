<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Backpack\CRUD\CrudTrait;
use App\Traits\ModelObservantTrait;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;

class Seo extends Model
{
	use ModelObservantTrait;
    use CrudTrait;
	use SoftDeletes;
	use HasTranslations;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'seos';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['pagina', 'seoable_id', 'seoable_type', 'slug', 'og_image', 'og_url', 'title', 'description', 'keywords', 'og_title', 'og_description', 'ordre', 'publicat', 'created_user', 'updated_user', 'deleted_user'];
    // protected $hidden = [];
    protected $dates = ['deleted_at'];
	protected $translatable = ['slug', 'title', 'description', 'keywords', 'og_title', 'og_description'];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
	public function seoable()
    {
        return $this->morphTo();
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
	public function scopePublicat($query)
	{
		$query->where($this->table.'.publicat', 1);
	}
    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
	public function setOgImageAttribute($value)
	{
        $attribute_name = "og_image";
        $disk = "uploads";
        $destination_path = "uploads/".$this->table;

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->$attribute_name);

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value);
            // 1. Generate a filename.
            $filename = md5($value.time()).'.jpg';
            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
            // 3. Save the path to the database
            $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
        }
    }
}
