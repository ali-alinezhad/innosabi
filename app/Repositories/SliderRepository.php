<?php


namespace App\Repositories;


use Illuminate\Support\Facades\Storage;

class SliderRepository
{
    public function getProjectsContentFromJson()
    {
        $contents = json_decode(Storage::disk('local')->get('./data/projects.json'), true);
        $imageHash = [];
        foreach($contents['data'] as $content) {
                $imageHash[] = $content['image'];
        }

        return $contents['data'];
    }
}
