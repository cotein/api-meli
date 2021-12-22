<?php

namespace App\Src\Models;

use App\Src\Models\Iva;
use App\Src\Models\Category;
use App\Src\Models\Supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    /**
     * The categories that belong to the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * The brands that belong to the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function brands(): BelongsToMany
    {
        return $this->belongsToMany(Brand::class);
    }

    /**
     * The suppliers that belong to the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function suppliers(): BelongsToMany
    {
        return $this->belongsToMany(Supplier::class);
    }

    /**
     * Get the iva associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function iva(): HasOne
    {
        return $this->hasOne(Iva::class);
    }

    /**
     * Get the status associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function status(): HasOne
    {
        return $this->hasOne(Status::class);
    }
}
