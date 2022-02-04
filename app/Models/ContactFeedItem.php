<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactFeedItem extends Model
{
    use HasFactory;

    protected $table = 'contact_feed_items';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'contact_id',
        'feedable_id',
        'feedable_type',
    ];

    /**
     * Get the contact associated with the contact feed item.
     *
     * @return BelongsTo
     */
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    /**
     * Get the contact information type associated with the contact feed item.
     *
     * @return MorphTo
     */
    public function feedable()
    {
        return $this->morphTo();
    }
}