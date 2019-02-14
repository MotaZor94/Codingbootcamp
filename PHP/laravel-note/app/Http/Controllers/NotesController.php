<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;

class NotesController extends Controller
{
    //
    public function edit(Request $request)
    {   //THIS IS RETRIEVING EXISTING MOVIE
        if($request->has('id')) {
            $query = "
            SELECT *
            FROM `notes`
            WHERE `id` = ?
            LIMIT 1 
            ";
        $movie = DB::selectOne($query, [
            $request->input('id')
        ]);
        } else {
            //CREATING EMPTY MOVIE
            $movie = (object)[
                'ID'    => null,
                'Name'  => null,
                'Text'  => null,
            ];
        }

        //IF THE FORM WAS SUBMITTED
        if($request->method() == 'POST') {
            //VALIDATE REQUEST DATA
            $this->validate($request, [
                'name' => 'required',
                'text' => 'required'
            ]);
            
            
            //UPDATE THE DATA FROM REQUEST
            $movie->Name  = $request->input('name');
            $movie->Text  = $request->input('text');

            if ($movie->ID) {
                // UPDATING EXISTING MOVIE
                $query ="
                    UPDATE `notes`
                    SET `Name` = ?,
                        `Text` = ?,
                    WHERE `ID` = ?
                    LIMIT 1
                ";
                DB::update($query, [
                    $movie->Name,
                    $movie->Text,
                ]);
            } else {
                //INSERTING A NEW CITY
                $query = "
                    INSERT
                    INTO `notes`
                    (`Name`,`Text`)
                    VALUES
                    (?, ?)
                ";
                DB::insert($query,[
                    $movie->Name,
                    $movie->Text
                ]);

                $movie->ID = DB::getPdo()->lastInsertId();
            }

            Session::flash('success_message','Movie was successfully saved.');

            return redirect('edit?='.$movie->ID);

            
        } 

        $edit_form = view('edit', [
            'movie' => $movie
        ]);

        return view('html',[
            'content' => $edit_form

        ]);
    }
}
