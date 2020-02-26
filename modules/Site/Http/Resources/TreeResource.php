<?php

namespace Modules\Site\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class TreeResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'site_tree_id' => $this->site_tree_id,
            'title' => $this->title,
            'label' => $this->label,
            'route' => $this->route,
            'url' => $this->url,
            'pages' => $this->collection($this->pages),
            'parent' => $this->parent,
            'children' => $this->collection($this->children)
        ];
        // return parent::toArray($request);
    }
}
