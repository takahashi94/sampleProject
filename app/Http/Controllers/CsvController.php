<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsvController extends Controller
{
    public function csv()
    {
        $users = [
            ['name' => '太郎', 'age' => 24],
            ['name' => '花子', 'age' => 39]
        ];

        return view('csv.index', [
            'users' => $users,
        ]);
    }

    public function postCsv()
    {
        $users = [
            ['name' => '太郎', 'age' => 24],
            ['name' => '花子', 'age' => 39]
        ];

        $head = ['名前', '年齢'];

        $f = fopen('test.csv', 'w');
        if ($f) {
            mb_convert_variables('SJIS', 'UTF-8', $head);
            fputcsv($f, $head);

            foreach ($users as $user) {
                mb_convert_variables('SJIS', 'UTF-8', $user);
                fputcsv($f, $user);
            }
        }

        fclose($f);

        header("Content-Type: application/octet-stream");
        header('Content-Length: '.filesize('test.csv'));
        header('Content-Disposition: attachment; filename=test.csv');
        header('Content-Transfer-Encoding: binary');
        readfile('test.csv');

        return view('user.index', compact('users'));
    }
}
