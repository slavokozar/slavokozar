<?php
/**
 * Created by PhpStorm.
 * User: slavo
 * Date: 7.8.18
 * Time: 17:31
 */

namespace App\Http\Controllers\Admin\CV;


use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $education = Education::all();


        return view('admin.cv.education.index', compact(['education']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $educationObj = new Education();

        return view('admin.cv.education.edit', compact(['educationObj']));
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

        Education::create($data);

        return redirect(action('Admin/CV/EducationController@index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $educationObj = Education::findOrFail($id);

        return view('admin.cv.education.edit', compact(['educationObj']));
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

        $educationObj = Education::findOrFail($id);
        $educationObj->update($data);

        return redirect(action('Admin/CV/EducationController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $educationObj = Education::findOrFail($id);
        $educationObj->delete();

        return redirect(action('Admin/CV/EducationController@index'));
    }
}