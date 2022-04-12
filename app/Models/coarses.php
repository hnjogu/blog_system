<?php
namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class coarses extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    public $table = "coarses";
    protected $primaryKey = 'coarse_id';
    public $timestamps = true;
    /*
     * Important records to be filled
     */
    protected $fillable = [
        'coarse_id','category_name','user_id','coarses_title','coarse_link','status'
    ];


    public function content()
    {
        return $this->belongsTo('App\content');
    }


}