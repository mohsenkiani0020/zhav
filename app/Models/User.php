<?php

namespace App\Models;

use App\Enums\GenderStatusEnum;
use App\Enums\ProviderStatusEnum;
use App\Events\RegistrationEvent;
use App\Events\ResetPasswordEvent;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property numeric $id
 * @property string  $first_name
 * @property string  $last_name
 * @property string  $email
 * @property string  $email_verified_at
 * @property string  $phone
 * @property string  $phone_verified_at
 * @property string  $verification_code
 * @property string  $verification_code_expire
 * @property string  $password
 * @property string  $gender
 * @property string  $provider
 */

class User extends Authenticatable implements MustVerifyEmail, CanResetPassword, LaratrustUser
{
    use HasApiTokens, HasFactory, Notifiable, HasRolesAndPermissions, HasUlids;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'phone',
        'email',
        'email_verified_at',
        'phone_number',
        'phone_number_verified_at',
        'verification_code',
        'verification_code_expire',
        'password',
        'provider',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $appends = [
        'name'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'first_name'               => 'string',
        'last_name'                => 'string',
        'gender'                   => GenderStatusEnum::class,
        'provider'                 => ProviderStatusEnum::class,
        'email'                    => "string",
        'email_verified_at'        => 'datetime',
        'phone_number'             => "string",
        'phone_number_verified_at' => 'datetime',
        'verification_code'        => 'string',
        'verification_code_expire' => 'datetime',
        'password'                 => 'hashed',
    ];

    /**
     * Interact with the user's first name.
     *
     * @return Attribute
     */
    protected function firstname(): Attribute
    {
        return Attribute::make(
            get: fn($value) => ucfirst($value),
            set: fn($value) => strtolower(trim($value))
        );
    }

    /**
     * Interact with the user's last name.
     *
     * @return Attribute
     */
    protected function lastname(): Attribute
    {
        return Attribute::make(
            get: fn($value) => ucfirst($value),
            set: fn($value) => strtolower(trim($value)),
        );
    }

    /**
     * create a virtual column name from first_name and last_name
     *
     * @return Attribute
     */
    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn(mixed $value, array $attributes) => ucfirst($attributes['first_name']) . " " . ucfirst($attributes['last_name']),
        );
    }

    /**
     * Interact with the user's email
     *
     * @return Attribute
     */
    protected function email(): Attribute
    {
        return Attribute::make(
            set: fn($value) => strtolower(trim($value))
        );
    }

    /**
     * @return void
     */
    protected static function boot(): void
    {
        parent::boot();
        static::created(function ($model){
            RegistrationEvent::dispatch($model);
        });
    }

    /**
     * @param $token
     *
     * @return void
     */
    public function sendPasswordResetNotification($token): void
    {
        ResetPasswordEvent::dispatch($this, $token);
    }

    /**
     * Get the profile's image for this user
     */
    public function profileImage(): File|MorphOne|null
    {
        return $this->morphOne(File::class, 'parentable')->where('image_type', '=', 'profile',);
    }
}
