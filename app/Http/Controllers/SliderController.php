<?php

namespace App\Http\Controllers;


use App\Repositories\SliderRepository;

class SliderController extends Controller
{
    public function index(SliderRepository $repository)
    {
        return view('slider.index',[
            'contents' => $repository->getProjectsContentFromJson()
        ]);
    }
}
