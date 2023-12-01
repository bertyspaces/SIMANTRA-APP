<?php

namespace App\Controllers;

use App\Models\RKModel;

class Rating_Kriteria extends BaseController
{
    public function index()
    {
        $rating = new RKModel();
        $list_rating = $rating->getRatingWithBobotKriteria();
       

        return view('/master/rating_kriteria/index',[
            'list_rating'=>$list_rating
        ]);
    }
}
