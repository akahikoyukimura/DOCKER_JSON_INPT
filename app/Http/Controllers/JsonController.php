<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function index()
    {
        // chemin d'accès à votre fichier JSON
$file = '../universities.json'; 
// mettre le contenu du fichier dans une variable
$data = file_get_contents($file); 
// décoder le flux JSON
$obj = json_decode($data); 

        return view('welcome',[
            'universities'=>$obj
        ]);
    }

    public function add(Request $request)
    {
        //$input = Input::only('photo','name','adress','domaine');

$data = file_get_contents('../universities.json');

$arr = json_decode($data);
//dd($arr);
$arr[] = ['photo' => $request->input('photo'), 'name' => $request->input('name'),
'adress'=>$request->input('adress'),'domaine'=>$request->input('domaine')];

$jsonData = json_encode($arr);
file_put_contents('../universities.json', $jsonData);

        
        //dd($arr1);
        return redirect('/');
    }
}
