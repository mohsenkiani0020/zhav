<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property numeric $newsletter_email
 */

class Newsletter extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'newsletters';

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
        'newsletter_email',
    ];

    /**
     * @return void
     */
    protected static function boot():void
    {
//        parent::boot();
//        static::created(function ($model) {
//            NewsletterFormSubmit::dispatch($model);
//        });
    }
}
