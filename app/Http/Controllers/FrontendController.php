<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Video;
class FrontendController extends Controller
{
    public function main($value='')
  {
  	$blog = Blog::take(1)->orderBy('id','desc')->get();
    $vid = Video::take(3)->orderBy('id','desc')->get();
  	$video = Video::all();
    return view('frontend.mainpage',compact('blog','video','vid'));
  }
  public function video($value='')
  {
    $video = Video::all();
    return view('frontend.video',compact('video'));
  }
  public function videodetail($id)
  {
    $videodetail = Video::find($id);
    $video = Video::all();
    return view('frontend.videodetail',compact('videodetail','video'));
  }
}
