<?php

namespace App\Http\Controllers\Custom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
class CvController extends Controller
{
	protected $data = array();

    public function index()
    {
    	return view('welcome');
    }

    public function downloadcv()
    {
    	$file = "portfolio/images/cv.pdf";
    	$header =array('Content-Type: application/pdf');

    	return Response::download($file,"jpd_cv.pdf",$header);
    }
}
