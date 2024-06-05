<?php

namespace App\Models;

use App\Events\ContactFormSubmitEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property numeric $email_phone
 * @property string  $department
 * @property string  $email
 * @property string  $phone
 * @property string  $message
 */

class Contact extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contacts';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email_phone',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];


    public static function boot():void
    {
        parent::boot();
        static::created(function ($model){
            ContactFormSubmitEvent::dispatch($model);
        });
    }
}
