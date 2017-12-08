<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;


class Pagina extends Model
{
    use CrudTrait;
    use SoftDeletes;


     /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

    protected $table = 'paginas';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['titol','descripcio','entrada','imatge','data','orden','publicat','created_user','updated_user','deleted_user'];
    // protected $hidden = [];
    protected $dates = ['deleted_at'];
    protected $translatable = ['titol','descripcio'];


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

    /*
	|--------------------------------------------------------------------------
	| SCOPES
	|--------------------------------------------------------------------------
	*/

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
  public function setCreatedAtAttribute($value)
  {
    $id = Auth::id();
    $this->attributes['created_user'] = $id;
  }
  public function setUpdatedAtAttribute($value)
  {
    $id = Auth::id();
    $this->attributes['updated_user'] = $id;
  }
  public function setDeletedAtAttribute($value)
  {
    $id = Auth::id();
    $this->attributes['deleted_user'] = $id;
  }




  public function setImatgeAttribute($value)
  {
      $attribute_name = "imatge";
      $disk = "uploads";
      $destination_path = "uploads";

      // if the image was erased
      if ($value==null) {
          // delete the image from disk
          \Storage::disk($disk)->delete($this->image);

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
