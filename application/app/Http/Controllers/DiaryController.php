<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;
use Illuminate\Support\Facades\Auth;

class DiaryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $user_id = Auth::id();
        $diary = Diary::create([
            'user_id' => $user_id,
            'diary_date' => $request->diary_date,
            'contents' => $request->contents,
        ]);
        $diary->save();

        return view('home');
    }
}
