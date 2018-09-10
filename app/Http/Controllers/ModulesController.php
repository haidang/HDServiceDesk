<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MainModules;
use Yajra\DataTables\DataTables;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

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

   public $listing_cols = ['id','name','label','fa_icon','is_menu','description','parent','sort'];

   public function getItemDetail($id){
     $value = MainModules::where('id',$id)->first();
      if ($value){
        return Response::json($value);
      }
   }
   public function AjaxModuleData() {
     $values = MainModules::select($this->listing_cols)
        ->where('status',1)->orderBy('sort','asc')
        ->get();

    return Datatables::of($values)
      ->editColumn('label', function ($values) {
				return '<strong><i class="'.$values->fa_icon.'"></i><a class="showItem" href="'.$values->label.'" data-id="'.$values->id.'"> '.$values->label.'</a></strong>';
			})
      ->editColumn('is_menu', function ($values) {
        if ($values->is_menu) {
          return '<input type="checkbox" name="swIsMenu" class="js-switch swIsMenu" checked data-id="'.$values->id.'">';
        } else {
          return '<input type="checkbox" class="js-switch swIsMenu" data-id="'.$values->id.'">';
        }
			})
      ->addColumn('actions', function ($values) {
        return '
        <button type="button" class="btn btn-xs btn-primary btnEdit" data-id='.$values->id.'>
          <span class="glyphicon glyphicon-edit" />
        </button>
        <button class="btn btn-xs btn-warning btnDelete" data-id='.$values->id.' data-deletemsg="'.trans('messages.deleteConfirm',['name'=>$values->name]).'">
          <span class="glyphicon glyphicon-trash" />
        </button>';
      })
      ->addColumn('parent',function($values){
        if ($values->getParent) return $values->getParent->label;
      })
      ->rawColumns(['actions','name','label','is_menu'])
      ->make(true);
   }

   public function ChangeIsMenu(Request $request, $id){
     $rules = array(
       'checkBol'        => 'required',
     );
     $validator = Validator::make(Input::all(),$rules);
     if($validator->fails())
       $notification = array('message' => trans('messages.SystemError'),
         'title' => trans('messages.alert'),'type' => 'warning',
       );
     else{
    	$data = MainModules::find($id);
    	$data->is_menu = $request->checkBol;
     if($data->save()) {
       $notification = array('message' => trans('commons.Update').' '.trans('commons.module').' '.trans('messages.success'),
         'title' => trans('messages.alert'),'type' => 'success',
       );
     } else {
       $notification = array('message' => trans('messages.SystemError'),
         'title' => trans('messages.alert'),'type' => 'warning',
       );
     }
     return Response::json(['data'=>$data,'notification'=>$notification]);
    }
   }

   public function ChangeSort(Request $request) {
     $rules = array(
       'sort'        => 'required',
     );
     $validator = Validator::make(Input::all(),$rules);
     if($validator->fails())
       $notification = array('message' => trans('messages.SystemError'),
         'title' => trans('messages.alert'),'type' => 'warning',);
     else{
       $items = $request->sort;
       for ($i = 0; $i < count($items); $i++) {
         $data = MainModules::find($items[$i]['id']);
         if($data) {
           $data->sort = $items[$i]['sort'];
           $data->save();
           $notification = array('message' => trans('commons.Update').' '.trans('commons.module').' '.trans('messages.success'),
             'title' => trans('messages.alert'),'type' => 'success',
           );
         }
       }
     }
     return Response::json(['data'=>$data,'notification'=>$notification]);
   }

   public function index()
   {
     $modules = MainModules::where([['status',1],])->get();
     $module = MainModules::where([['status',1],['name','module']])->first();
     return view('pages.modules.index',compact('module','modules'));
   }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    echo 'ok';
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $rules = array(
      'Name'        => 'required|max:190|unique:mn_modules',
      'Label'       => 'required|max:190',
		);
		$validator = Validator::make(Input::all(),$rules);
		if($validator->fails())
			return Response::json(array('errors' => $validator->getMessageBag()));
		else{
			$data = new MainModules;
			$data->name = $request->Name;
			$data->label = $request->Label;
			if ($request->fa_icon) $data->fa_icon = $request->Icon;
			if ($request->Url) $data->url = $request->Url;
			if ($request->Parent) $data->parent = $request->Parent;
			$data->is_menu = $request->IsMenu;
			$data->description = $request->Description;
      if($data->save()) {
        $data->sort = $data->id;
        $data->save();
        $notification = array('message' => trans('commons.Add').' '.trans('commons.module').' '.trans('messages.success'),
          'title' => trans('messages.alert'),'type' => 'success',
        );
      } else {
        $notification = array('message' => trans('messages.SystemError'),
          'title' => trans('messages.alert'),'type' => 'warning',
        );
      }
      return Response::json(['notification'=>$notification]);
		}
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
    $rules = array(
      'Name'        => 'required|max:190',
      'Label'       => 'required|max:190',
		);
		$validator = Validator::make(Input::all(),$rules);
		if($validator->fails())
			return Response::json(array('errors' => $validator->getMessageBag()));
		else{
			$data = MainModules::find($id);
			$data->name = $request->Name;
			$data->label = $request->Label;
			$data->fa_icon = $request->Icon;
			$data->url = $request->Url;
			if ($request->Parent) $data->parent = $request->Parent;
			$data->is_menu = $request->IsMenu;
			$data->description = $request->Description;
      if($data->save()) {
        $notification = array('message' => trans('commons.Update').' '.trans('commons.module').' '.trans('messages.success'),
          'title' => trans('messages.alert'),'type' => 'success',
        );
      } else {
        $notification = array('message' => trans('messages.SystemError'),
          'title' => trans('messages.alert'),'type' => 'warning',
        );
      }
      return Response::json(['data'=>$data,'notification'=>$notification]);
		}
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $tb = MainModules::find($id);
    if ($tb->forceDelete()) {
      $notification = array('message' => trans('commons.Update').' '.trans('commons.module').' '.trans('messages.success'),
        'title' => trans('messages.alert'),'type' => 'success',
      );
    } else {
      $notification = array('message' => trans('messages.SystemError'),
        'title' => trans('messages.alert'),'type' => 'warning',);
    };
    return Response::json(['notification'=>$notification]);
  }

  public function softDelete($id)
  {
    $tb = Modules::find($id);
    $tb->delete();
    return "Success";
  }

  public function restore($id) {
    $tb = Modules::find($id)->restore();
    $tb->save();
    return "Success";
}
}
