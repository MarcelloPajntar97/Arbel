<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SecretaryEditData extends Controller
{

  public function getSubjects($id)
    {
        $subjects = DB::table("subjects")->where("class_id",$id)->pluck("subjectName","id");
        return json_encode($subjects);
        
    }
}
