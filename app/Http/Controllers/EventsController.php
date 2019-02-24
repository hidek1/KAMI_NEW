<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Event;
class EventsController extends Controller
{
  public function index() {
// LEFT OUTER JOIN
    $events=[];
   $events['info']= Event::leftJoin('event_details','events.event_id','=','event_details.detail_id')
   ->get();
//考え中
//中間テーブル用
// $events_rela = \App\Event::with('users')->get();
// print_r($events_rela->toArray());
//配列に分けるとき用
   // $events['info']['participants']=$participants;
   // $events['info']['like']=$like;

   // dd($events_rela);
     return view('event_list', compact('events'));
  }



}
