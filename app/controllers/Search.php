<?php

class Search extends BaseController {

    public function getSearch() {
        $data['stats'] = DB::table('phonedb')->count();
        $data['results'] = "";
        return View::make('index', $data);
    }

    public function postSearch() {
        $input = Input::get('input');
        $data['stats'] = DB::table('phonedb')->count();
        $data['results'] = DB::table('phonedb')->where('phone', $input)->first();

        return View::make('index', $data);
    }

}
