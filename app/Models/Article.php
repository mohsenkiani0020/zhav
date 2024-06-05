<?php

namespace App\Models;

use App\Traits\Slugable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * @property numeric $language_id
 * @property string  $user_id
 * @property string  $article_category_id
 * @property string  $title
 * @property string  $slug
 * @property string  $body
 * @property string  $keywords
 * @property string  $description
 * @property string  $short_text
 * @property string  $reading_time
 */

class Article extends Model
{
    use HasFactory, Slugable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'articles';

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
        "language_id",
        "user_id",
        'article_category_id',
        "title",
        "slug",
        "body",
        "keywords",
        "description",
        "short_text",
        "reading_time",
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     *
     * @return array
     */
    protected $casts = [
        "created_at" => "datetime",
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo
     */
    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }

    /**
     * Get the profile's image for this user
     */
    public function articleImage(): File|MorphOne|null
    {
        return $this->morphOne(File::class, 'parentable')->where('image_type', '=', 'thumbnail',);
    }

    /**
     * Get the header's image for this user.
     */
    public function articleHeaderImage(): File|MorphOne|null
    {
        return $this->morphOne(File::class, 'parentable')->where('image_type', '=', 'header',);
    }

    /**
     * Get the language that owns this skill.
     */
    public function articleCategory(): BelongsToMany
    {
        return $this->belongsToMany(ArticleCategory::class, 'article_article_categories', 'article_category_id', 'article_id');
    }
}
