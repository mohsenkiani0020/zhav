<?php

namespace App\Traits;

trait Slugable
{
    /**
     * Create a conversation slug.
     *
     * @param  string $value
     * @return string
     */
    protected function makeSlug($value)
    {
        $baseSlug = preg_replace('/[^A-Za-z0-9\p{L}\-]/u', '-', strtolower(trim($value)));

        // Check if the base slug already exists in the database
        $count = 0;
        $slug = $baseSlug;
        while (static::where("slug", "LIKE", $slug)->count() > 0) {
            $count++;
            $slug = "{$baseSlug}-{$count}";
        }

        return $slug;
    }
}
