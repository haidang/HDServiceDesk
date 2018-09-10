<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DataTables;
use App\Models\MainModules;
use App\Models\CustCustomers;
use App\Models\CustContacts;

class CustomersController extends Controller
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

  public $listing_cols = ['id','name','address','id_city','id_district',
    // 'city.type as cityType','city.name as city',
    // 'district.type as distType','district.name as district',
    // 'owner.firstname as ownerFistname','owner.lastname as ownerLastname',
    // 'createdBy.firstname as createdFistname','createdBy.lastname as createdLastname',
    // 'status.label as status','status.color as statusColor',
  ];

  public function AjaxCustomerData() {

    $values = CustCustomers::select($this->listing_cols)
    // ->join('pick_cities as city', 'cust_customers.id_city', '=', 'city.id')
    // ->join('pick_districts as district', 'cust_customers.id_district', '=', 'district.id')
    // ->join('pick_picklists as status', 'id_status', '=', 'status.id')
    // ->join('users as owner', 'id_owner', '=', 'owner.id')
    // ->join('users as createdBy', 'id_created', '=', 'createdBy.id')
   // ->whereNotNull('id_status')
   ->get();
   return Datatables::of($values)
     ->editColumn('label', function ($values) {
       return '<strong><a class="showItem" href="'.$values->name.'" data-id="'.$values->id.'"> '.$values->name.'</a></strong>';
     })
     ->editColumn('address', function ($values){
      $htmlString = '';
      if (count($values->address)) {
      	$htmlString = $values->address.', ';
      }
      $htmlString .= $values->district->type.' '.$values->district->name.', <strong>'.$values->city->type.' '.$values->city->name.'</strong>';
      return $htmlString;
     })
     ->editColumn('id_district',function ($values){
       return $values->district->name;
     })
     ->editColumn('id_city',function ($values){
       return $values->city->name;
     })
     ->addColumn('owner', function ($values){
       if (count($values->ownerLastname)){
         return $values->ownerFistname.' '.$values->ownerLastname;
       } else $values->ownerFistname;
     })
     ->editColumn('status', function($values){
       return '<span class="label label-success lblStatus" style="background-color: '.$values->statusColor.' !important" data-id="'.$values->id.'">'.$values->status.'</span>';
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
     ->rawColumns(['actions','address','status',])
     ->make(true);
  }

  public function index()
  {
    $module = MainModules::where([['status',1],['name','customer']])->first();
    return view('pages.customers.index',compact('module'));
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
