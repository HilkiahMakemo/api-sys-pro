<?php

namespace Modules\Site\Models;

use Illuminate\Database\Eloquent\Model;

class SiteTree extends Model
{
    protected $fillable = [
        'site_tree_id',
        'title',
        'label',
        'route',
        'metadata'
    ];


    public function Children()
    {
        # code...
        return $this->hasMany(__CLASS__);
    }

    public function Parent()
    {
        # code...
        return $this->belongsTo(__CLASS__, 'site_tree_id');
    }

    public function getRouteAttribute($route)
    {
        return "/".trim($route, '/\\');
    }

    public function getUrlAttribute()
    {
        $thisRoute = $this->route;
        $parentURL = $this->parent->url ?? "";

        return '/'. trim($parentURL.$thisRoute, '/\\');
    }
}
