<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        #登入使用者id
        $id = Auth::id();

        return redirect()->route('home.show', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        #取得登入使用者之個人資料
        $profile = Profile::where('user_id','=',$id)->first();

        $data = [
            'profile' => $profile,
        ];

        return view('profile.home', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::where('user_id','=',$id)->first();

        $data = [
            'profile'=>$profile,
        ];

        return view('profile.edit', $data);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profile = Profile::where('user_id','=',$id)->first();

        $att['sex'] = $request->input('sex');
        $att['county'] = $request->input('county');
        $att['website'] = $request->input('website');
        $att['phone'] = $request->input('phone');
        $att['email'] = $request->input('email');

        #更新修改後資料
        $profile->update($att);

        return redirect()->route('home');
    }

}
