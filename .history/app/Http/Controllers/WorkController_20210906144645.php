<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{


public function CultureIndex()
{

    return view('work.culture');

}

public function NatureIndex()
{

    return view('work.natu');

}

public function HeritageIndex()
{

    return view('work.heritage');

}

public function LanguageIndex()
{

    return view('work.language');

}


}
