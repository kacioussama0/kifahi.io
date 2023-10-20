<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Thujohn\Twitter\Twitter;

class PostController extends Controller
{
   public function sendPost(Request $request) {

       $request->validate([
           'content' => 'required'
       ]);

       $isExist = Post::where('content','=', $request['content'])->get()->first();


       if(empty($isExistk)) {

           $created = Post::create([
               'content' => $request['content']
           ]);

           if($created) {
               return response()->json([
                   'status' => true
               ],200);
           };

       }


   }

   public function getTrends() {
      echo  "soon";
   }
}
