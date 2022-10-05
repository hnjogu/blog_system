<?php
namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
class content extends Authenticatable
{
    use Notifiable;
    public $table = "content";
    protected $primaryKey = 'content_id';
    public $timestamps = true;
    /*
     * Important records to be filled
     */
    protected $fillable = [
        'content_id','user_id','slug','category_id','sub_category','content_title','description','summary','photo','status','code_content',

    ];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where(fn($query) =>
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%')
            )
        );

        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query->whereHas('category', fn ($query) =>
                $query->where('slug', $category)
            )
        );

    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

   public function category()
   {
       return $this->hasMany('App\Models\category','id');
   }


}