<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Http\Request;
use App\Sample;
use DB;

class SampleController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $samples = sample::search($keyword);

        return view('sample.index', [
            'samples' => $samples,
            'keyword' => $keyword,
        ]);
    }

    public function export(Request $request)
    {
        $samples = DB::table('samples')->get();
        $lists = [];
        foreach ($samples as $sample) {
            array_push($lists,
                [
                    $sample->id,
                    $sample->name,
                    $sample->title,
                    $sample->content,
            ]);
        }
        // ファイル生成
        $stream = fopen('php://output', 'w');
        fwrite($stream, pack('C*', 0xEF, 0xBB, 0xBF)); // BOM をつける
    
        // ヘッダー
        fputcsv($stream, ['id', 'name', 'title', 'content']);
    
        //
        foreach ($lists as $list) {
            fputcsv($stream, $list);
        }
    
        return response(stream_get_contents($stream), 200)
                     ->header('Content-Type', 'text/csv')
                     ->header('Content-Disposition', 'attachment; filename="demo.csv"');
    }
}
