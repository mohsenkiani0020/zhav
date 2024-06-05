<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property numeric $language_id
 * @property string  $title
 * @property string  $fontawesome
 */

class ArticleCategory extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'article_categories';

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
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'language_id',
        "title",
        "fontawesome",
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Get the Language that owns the tour.
     */
    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }

    /**
     * Get the language that owns this skill.
     */
    public function article(): BelongsToMany
    {
        return $this->belongsToMany(Article::class, 'article_article_categories', 'article_id', 'article_category_id');
    }
}
