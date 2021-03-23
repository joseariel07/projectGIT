<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //index
    public function index(){
    //all(); devolver todos lo datos de la tabla en un acoleccion de los objetos
    //filtar requisitos => where() aplica una condicional
    //WHERE state > 0 and name like'%a%'
    //get() : devuelva la peticion como una coleccio de  objetos 
    //paginate() : devuelva la peticion como una coleccio de  objetos y adicinalmente 
    //devuelve datos paginado
    //render()=> generar un complonente HTML paginador
    $student = student::where('state',1)->paginate (2);
    student = student::all();
    dd($student);
    return view('admin/index')->with('student',$student);
}
//create 
public function create(){
    return view(dd('admin/student/create');
}
    
//store 
//show
//edit 
//update
//destroy


 