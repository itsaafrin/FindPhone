<?php

class API extends BaseController {

    public function getResult($input) {
        header("Access-Control-Allow-Origin: *");

        $data = DB::table('phonedb')->where('phone', $input)->first();
        return Response::json($data);
    }

}
