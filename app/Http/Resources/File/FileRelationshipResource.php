<?php
namespace App\Http\Resources\File;

use App\Http\Resources\User\UserIdentifierResource;
use App\Http\Resources\Folder\FolderIdentifierResource;
use Illuminate\Http\Resources\Json\JsonResource;

class FileRelationshipResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'user' => [
                'links' => [
                    'self' => route('file.relationships.user', ['file' => $this->id]),
                    'related' => route('file.user', ['file' => $this->id]),
                ],
                'data' =>  new UserIdentifierResource($this->user),
            ],
            'folders' => [
                'links' => [
                    'self' => route('file.relationships.folders', ['file' => $this->id]),
                    'related' => route('file.folders', ['file' => $this->id]),
                ],
                'data' => FolderIdentifierResource::collection($this->folders),
            ],
        ];
    }
}