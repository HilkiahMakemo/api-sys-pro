<?php

namespace Modules\Site\Models;

use Illuminate\Database\Eloquent\Model;

class SitePage extends Model
{
    protected $fillable = [
        "site_tree_id",
        "content"
    ];
}
