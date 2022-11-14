<?php

namespace App\Http\Controllers;


use App\Models\Admin;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

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
        $data = Admin::all();
        return response()->view('sensorial.dashboard.admins.index', ['admins' => $data]);
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
        $admin = new Admin();
        $validator = Validator($request->all(),[
            'name_en' => 'required|string',
            'name_ar' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'id_photo' => 'required',
            'photo' => 'required',
        ]);

        if(!$validator->fails())
        {
            $admin->name_en = $request->get('name_en');
            $admin->name_ar = $request->get('name_ar');
            $admin->email = $request->get('email');
            $admin->password = Hash::make($request->get('password'));
            $admin->code = $request->get('code');
            $admin->phone_number = $request->get('phone_number');
            $admin->address = $request->get('address');
            if ($request->hasFile('id_photo')){
                $image = time() .'.'.$request -> id_photo->extension();
                $request->id_photo->move(public_path('requirement/uploads/id_photo/'),$image);
                $admin->id_photo = $image;
            }
            if ($request->hasFile('photo')){
                $image = time() .'.'.$request -> photo->extension();
                $request->photo->move(public_path('requirement/uploads/photo/'),$image);
                $admin->photo = $image;
            }

            $isSaved = $admin->save();

            return response()->json([
                'message' => $isSaved ? "Created Successfully" : "Failed to Create"
            ], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);

            } else {
            //VALIDATION FAILED في حال فشل الفاليديشن
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
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
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $admin = Admin::find($id);
        $validator = Validator($request->all(),[
            'name_en' => 'required|string',
            'name_ar' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'id_photo' => 'required',
            'photo' => 'required',
        ]);

        if(!$validator->fails())
        {
            $admin->name_en = $request->get('name_en');
            $admin->name_ar = $request->get('name_ar');
            $admin->email = $request->get('email');
            $admin->phone_number = $request->get('phone_number');
            $admin->address = $request->get('address');
            if ($request->hasFile('id_photo')){
                $image = time() .'.'.$request -> id_photo->extension();
                $request->id_photo->move(public_path('requirement/uploads/id_photo/'),$image);
                $admin->id_photo = $image;
            }
            if ($request->hasFile('photo')){
                $image = time() .'.'.$request -> photo->extension();
                $request->photo->move(public_path('requirement/uploads/photo/'),$image);
                $admin->photo = $image;
            }
            $isUpdated = $admin->save();

            return response()->json([
                'message' => $isUpdated ? "Updated Successfully" : "Failed to Update"
            ], $isUpdated ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);

            } else {
            //VALIDATION FAILED في حال فشل الفاليديشن
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
        $isDeleted = $admin->delete();
        if($isDeleted){
            return response()->json(['icon' => 'success' ,'title' => 'Success!' ,'text' => 'Deleted Successfuly' ,],Response::HTTP_OK);
        } else {
            return response()->json(['icon' => 'error' ,'title' => 'Failed!' ,'text' => 'Deleted Failed ' ,],Response::HTTP_BAD_REQUEST);
        }
    }
}
