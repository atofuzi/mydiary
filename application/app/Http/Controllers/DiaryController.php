<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DiaryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $user_id = Auth::id();
        $data["diaries"] = Diary::where('user_id', '=', $user_id)
            ->orderBy('diary_date', 'desc')
            ->limit(5)
            ->get();

        foreach ($data["diaries"] as $key => $diary) {
            if (mb_strlen($diary->contents) > 25) {
                $data["diaries"][$key]['contents'] = mb_substr($diary->contents, 0, 24) . '...';
            }
        }

        return view('home', $data);
    }


    public function register(Request $request)
    {
        $user_id = Auth::id();
        //pathを格納
        $path = self::getPath($request->pic1);

        $diary = Diary::create([
            'user_id' => $user_id,
            'diary_date' => $request->diary_date,
            'contents' => $request->contents,
            'pic1' => $path,
        ]);
        $diary->save();

        return redirect('/record');
    }

    public function show()
    {
        $user_id = Auth::id();
        $data["diaries"] = Diary::where('user_id', '=', $user_id)
            ->orderBy('diary_date', 'desc')
            ->get();
        return view('record', $data);
    }

    public function edit(Request $request)
    {
        $data["diary"] = Diary::where('id', '=', $request->id)->first();
        return view('edit', $data);
    }

    public function update(Request $request)
    {
        //pathを格納
        $path = self::getPath($request->pic1);
        $diary = Diary::where('id', '=', $request->id)
            ->update([
                'diary_date' => $request->diary_date,
                'contents' => $request->contents,
                'pic1' => $path,
            ]);

        return redirect('edit/' . $request->id);
    }

    public static function getPath($file)
    {

        if (!empty($file)) {
            //ファイルを保存しパファイル名・パスを自動生成
            $path = $file->store('public');

            //パスを変換（publicをstorageへ)
            $path = str_replace('public', 'storage', $path);

            return $path;
        } else {
            return null;
        }
    }
}
