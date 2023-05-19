<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use Illuminate\Support\Carbon;
use DataTables;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::orderByDesc('id')->get();
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('created_at', function ($data){
                $created_at = "{$data->created_at->diffForHumans()}";
                return $created_at; 
                    })
            ->make(true);
        }
        return view('pages.category.index');
    }


    public function statusChange(Request $request){
        Category::where('id',$request->id)->update(['status' => $request->status]);
        return response()->json([
            'message' => 'Status has been change'
        ]);
    }
    /**
     * Show the form for creating a enew resource.
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',   
          ]);
          if($validator->fails()){
              return response()->json([
               'status'=>400,
               'errors'=>$validator->messages(),
           ]);
        }else{
            Category::updateOrCreate([
                'id' => $request->cat_id,
            ], [
                'name' => $request->name,
                'created_at' => Carbon::now(),
           ]);
           if($request->cat_id){
             $msg = "Category Updated successfully";
           }else{
            $msg = "Category Added successfully";
           }
           
           return response()->json([
            'status'=>200,
            'message'=>$msg,
           ]);
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
        Category::find($id)->delete();
        return response()->json([
            'status'=>200,
            'message'=>"Category Deleted successfully",
        ]);
    }
}
