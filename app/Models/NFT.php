<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class NFT extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $table = 'nfts';
    protected $fillable = ['user_id', 'title', 'description', 'path_image', 'token_id', 'contract_address', 'metadata'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
