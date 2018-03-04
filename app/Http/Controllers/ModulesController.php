<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MainModules;
use Yajra\DataTables\DataTables;

class ModulesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function __construct()
   {
     $this->middleware('auth');
   }

   public $listing_cols = ['id','label','description','parent'];

   public function getAjaxModuleData()
   {
     // $module = MainModules::where([['status',1],['deleted_at',Null]])->get();
     // return  json_encode(['data'=>$module]);

     $values = MainModules::select($this->listing_cols)
        ->where([['status',1],['deleted_at',Null]])
        ->get();
    return Datatables::of($values)
      ->addColumn('actions', function ($values) {
        return '<a class="btn btn-xs btn-primary" href="#"><span class="glyphicon glyphicon-edit"></span></a> <button class="btn btn-xs btn-warning btnDelete" data-id="'.$values->id.'" data-deletemsg="'.trans("message.deleteConfirm",['item'=>$values->name]).'"><span class="glyphicon glyphicon-trash"></span></button>';
      })
      ->addColumn('parent',function($values){
        if ($values->getParent) return $values->getParent->label;
      })
      ->rawColumns(['actions','name',])
      ->make(true);
   }

   public function index()
   {
     $module = MainModules::where([['status',1],['name','module']])->first();
     return view('pages.modules.index',compact('module'));
   }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
