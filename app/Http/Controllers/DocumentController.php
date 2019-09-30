<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('document.create');
    }

    public function basicStoreJson()
    {

        $data = request()->validate([
            'street' => 'required',
            'number_of_home' => 'required',
            'number_of_building' => 'required',
            'post_code' => 'required',
            'city' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'date_of_birth' => 'required',
            'goal' => 'required',
            'image' => 'required|image',
        ]);
        $imagePath = request('image')->store('photos', 'public');
        auth()->user()->basicinformation()->create([
            'street' => $data['street'],
            'number_of_home' => $data['number_of_home'],
            'number_of_building' => $data['number_of_building'],
            'post_code' => $data['post_code'],
            'city' => $data['city'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'date_of_birth' => $data['date_of_birth'],
            'goal' => $data['goal'],
            'image' => $imagePath
        ]);

        return 'git';
    }

    public function schoolStoreJson()
    {
        $count_of_loop = (count(request()->all())-1)/4;
        for($i = 0; $i < $count_of_loop; $i++) {
            $data = request()->validate([
                'start_year_' . $i => 'required',
                'end_year_' . $i => 'required',
                'name_of_school_' . $i => 'required',
                'city_' . $i => 'required'
            ]);

            auth()->user()->schools()->create([
                'start_year' => $data['start_year_' . $i],
                'end_year' => $data['end_year_' . $i],
                'name_of_school' => $data['name_of_school_' . $i],
                'city' => $data['city_' . $i]
            ]);
        }

        return 'git';
    }

    public function experienceStoreJson()
    {
        $count_of_loop = (count(request()->all())-1)/7;
        for($i = 0; $i < $count_of_loop; $i++) {
            $data = request()->validate([
                'start_year_' . $i => 'required',
                'start_month_' . $i => 'required',
                'end_year_' . $i => 'required',
                'end_month_' . $i => 'required',
                'name_of_company_' . $i => 'required',
                'position_' . $i => 'required',
                'description_' . $i => 'required'
            ]);

            auth()->user()->experiences()->create([
                'start_year' => $data['start_year_' . $i],
                'start_month' => $data['start_month_' . $i],
                'end_year' => $data['end_year_' . $i],
                'end_month' => $data['end_month_' . $i],
                'name_of_company' => $data['name_of_company_' . $i],
                'position' => $data['position_' . $i],
                'description' => $data['description_' . $i]
            ]);
        }

        return 'git';
    }

    public function certificateStoreJson()
    {
        $count_of_loop = (count(request()->all())-1)/6;
        for($i = 0; $i < $count_of_loop; $i++) {
            $data = request()->validate([
                'certificate_' . $i => 'required',
                'city_' . $i => 'required',
                'start_month_' . $i => 'required',
                'start_year_' . $i => 'required',
                'end_month_' . $i => 'required',
                'end_year_' . $i => 'required'
            ]);


            auth()->user()-> certificates()->create([
                'certificate' => $data['certificate_' . $i],
                'city' => $data['city_' . $i],
                'start_month' => $data['start_month_' . $i],
                'start_year' => $data['start_year_' . $i],
                'end_month' => $data['end_month_' . $i],
                'end_year' => $data['end_year_' . $i]
            ]);
        }

        return 'git';
    }

    public function projectStoreJson()
    {
        $count_of_loop = (count(request()->all())-1)/2;
        for($i = 0; $i < $count_of_loop; $i++) {
            $data = request()->validate([
                'link_' . $i => 'required',
                'description_' . $i => 'required'
            ]);

            auth()->user()-> projects()->create([
                'link' => $data['link_' . $i],
                'description' => $data['description_' . $i]
            ]);
        } 

        return 'git';
    }

    public function save() {
        auth()->user()->has_cv = 1;
        auth()->user()->save();
        $id = auth()->user()->id;
        return redirect()->route('getPDF', ['user' => $id]);
    }
}
