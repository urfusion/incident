<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident;
use Carbon\Carbon;
use Validator;

class IncidentController extends Controller {

    /**
     * 
     * @param Request $request
     */
    public function store(Request $request) {
//        dd($request->all());
        $rules = [
            'category_id' => 'required|numeric',
            'incidentDate' => 'required|date',
            'location' => 'required|array',
            'location.*' => 'required',
        ];
        $messages = [
            'location.required' => 'Location field is required.',
            'category_id.required' => 'Category field required.',
            'category_id.numeric' => 'Category should be numeric.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            dd($validator->errors());
            return back()->withErrors($validator)->withInput();
        }
        $createDate = !empty($request->createDate) ? $request->createDate : now();
        $modifyDate = !empty($request->modifyDate) ? $request->modifyDate : now();
        $saved = false;
        try {
            $data = new Incident;
            $data->category_id = $request->category_id;
            $data->location = $request->location;
            $data->title = $request->title;
            $data->people = $request->people;
            $data->comments = $request->comments;
            $data->incidentDate = Carbon::parse($request->incidentDate)->format('Y-m-d H:i:s');
            $data->createDate = Carbon::parse($createDate)->format('Y-m-d H:i:s');
            $data->modifyDate = Carbon::parse($modifyDate)->format('Y-m-d H:i:s');
            $saved = $data->save();
        } catch (Exception $e) {
            return $e;
        }
        if ($saved) {
            dd('record saved successfully');
        } else {
            dd('Server Error');
        }
    }

    public function view() {
        try {
            $data = Incident::with('category')->paginate(10);
//            dd($data);
            return response()->json($data);
        } catch (Exception $e) {
            return $e;
        }
    }

}
