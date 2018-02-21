<?php

namespace Genusshaus\Http\Resources\iOS\Places;

use Illuminate\Http\Resources\Json\Resource;

class PostsShowRessource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'uuid'                => $this->uuid,
            'title'               => $this->title,
            'teaser'              => $this->teaser,
            'body'                => $this->body,
            'image'               => $this->getPreviewImage(),
            'author'              => $this->author,
            'src'                 => $this->src,
            'created_at'          => $this->created_at->timestamp,
            'created_at_readable' => $this->created_at->diffForHumans(),

            'tags' => TagsIndexRessource::collection($this->tags),

        ];
    }
}