<?php
/**
 * Created by PhpStorm.
 * User: slavo
 * Date: 7.8.18
 * Time: 17:31
 */

namespace App\Http\Controllers\Admin\CV;


use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experience = Experience::all();


        return view('admin.cv.experience.index', compact(['experience']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $experienceObj = new Experience();

        return view('admin.cv.experience.edit', compact(['experienceObj']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Experience::create($data);

        return redirect(action('Admin/CV/ExperienceController@index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $experienceObj = Experience::findOrFail($id);

        return view('admin.cv.experience.edit', compact(['experienceObj']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $experienceObj = Experience::findOrFail($id);
        $experienceObj->update($data);

        return redirect(action('Admin/CV/ExperienceController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experienceObj = Experience::findOrFail($id);
        $experienceObj->delete();

        return redirect(action('Admin/CV/ExperienceController@index'));
    }
}