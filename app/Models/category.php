<?php
namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class category extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    public $table = "categories";
    protected $primaryKey = 'category_id';
    public $timestamps = true;
    /*
     * Important records to be filled
     */
    protected $fillable = [
        'id','category_name','slug','sub_category','user_name','status'
    ];


    public function content()
    {
        return $this->belongsTo('App\content');
    }


}