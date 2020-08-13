<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources;
use App\Sample;
use App\Http\Resources\Test as TestResource;

class TestController extends Controller
{
    public function index()
    {
        $samples = Sample::paginate(10);

        return TestResource::collection($samples);
    }

    public function show($id)
    {
        $sample = Sample::find($id);

        return new TestResource($sample);
    }

    public function destroy($id)
    {
        $sample = Sample::find($id);

        if ($sample->delete()) {
            return new TestResource($sample);
        }
    }

    public function store(Request $request)
    {
        $sample = $request->isMethod('put') ? Sample::find($request->sample_id) : new Sample;

        $sample->id = $request->input("id");
        $sample->name = $request->input("name");
        $sample->title = $request->input("title");
        $sample->content = $request->input("content");

        if ($sample->save()) {
            return new TestResource($sample);
        }
    }
}
