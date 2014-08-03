<?php

class Search extends BaseController
{
    public $rules = array(
        'postSearch' => array(
            'input' => 'Required|integer'
        )
    );

    public function getSearch()
    {
        $data['stats'] = DB::table('phonedb')->count();
        $data['results'] = "";

        return View::make('index', $data);
    }

    public function postSearch()
    {
        $v = Validator::make(Input::all(), $this->rules['postSearch']);

        if ($v->passes()) {
            $input = Input::get('input');
            $data['stats'] = DB::table('phonedb')->count();
            $data['results'] = DB::table('phonedb')->where('phone', $input)->first();

            if ($data['results']) {
                return View::make('index', $data);
            } else {
                return Redirect::back()
                                ->with('error', 'No Record Found')
                                ->withInput();
            }
        } else {
            return Redirect::back()
                            ->withErrors($v)
                            ->withInput();
        }
    }

}
