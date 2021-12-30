<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image as Image;
use Carbon\Carbon;
use App\Mail\ConfirmationMail;
use Illuminate\Support\Str;

class AnalysteController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Liste des Analystes';
        $users = User::orderBy('name')->whereRoleId(2)->get();
        return view('dashboard/analyste/index', compact('title','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Nouveau Analyste';
        $roles = Role::where('name', 'admin')
                        ->orWhere('name', 'analyste')->get();
        return view('dashboard/analyste/create', compact('title', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $redirectTo)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone' => 'required|unique:users|digits:8',
            'adsress' => 'required',
            'birthday' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,svg,png,gif|max:4000'
        ]);

        if($request->hasfile('photo')){
            $imageUpload = $request->file('photo');
            $imageName = time(). '.' . $imageUpload->getClientOriginalExtension();
            $imagePath = public_path('storage');
            $imagePath = public_path('storage');
            $imageUpload->move($imagePath,$imageName);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'sex' => $request->sex,
                'birthday' => $request->birthday,
                'role_id' => $request->role,
                'phone' => $request->phone,
                'avatar' => 'storage/assets/img/'. $imageName,
                'password' => bcrypt(Str::random(12)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            Mail::to('test@test.com')->send(new ConfirmationMail($data));

        }
        else{

            return back()->with("require", "l'image est obligatoire pour cette action, vueillez la télécharger");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $title = 'Details '.$user->name;
        return view('dashboard/analyste/show', compact('title', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }

}
