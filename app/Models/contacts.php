<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Mail;
use App\Mail\ContactMail;

class contacts extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    public $table = "contacts";
    protected $primaryKey = 'contact_id';
    public $timestamps = true;

    public $fillable = ['names', 'email', 'subject', 'message'];


    public static function boot() {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "learn@itcourse.info";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
