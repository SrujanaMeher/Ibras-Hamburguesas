<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


 public function addItems(request $request)
    {
        //$image = Input::file('image')->getRealPath();





        $image=$request->file('image');

$imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);


        $img_url= $imageName;
        $item_name=$request->input('lname');
        $item_qty=$request->input('qty');
        $item_qty = (int)$item_qty;


//echo gettype($item_qty);
        $about_item=$request->input('subject');

         $target = "images/".basename($image);

         echo $target;

         $data = DB::insert('INSERT INTO items (item_image, item_name,itm_qty,item_desc, img_url)
            values(?,?,?,?,?)',[$image, $item_name,$item_qty,$about_item, $imageName]);
        
//     if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        

// return redirect('/admin')->with('success', 'Added item');
        

//     }else{
//         return redirect('/admin')->with('error', 'Failed to upload');
//     }


   
        return redirect('/admin')
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);



         $request->image->move(public_path('images'), $imageName);

        if($data)
        {

            return redirect('/admin')->with('success', 'Added item');
        }
        else
        {
            return redirect('/admin')->with('error', 'Failed to upload');
        }


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
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
