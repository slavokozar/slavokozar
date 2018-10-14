<?php
/**
 * Created by PhpStorm.
 * User: slavo
 * Date: 7.8.18
 * Time: 17:31
 */

namespace App\Http\Controllers\Admin\CV;


use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();


        return view('admin.cv.skills.index', compact(['skills']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skillObj = new Skill();

        return view('admin.cv.skills.edit', compact(['skillObj']));
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

        Skill::create($data);

        return redirect(action('Admin\CV\SkillController@index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skillObj = Skill::findOrFail($id);

        return view('admin.cv.skills.edit', compact(['skillObj']));
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

        $skillObj = Skill::findOrFail($id);
        $skillObj->update($data);

        return redirect(action('Admin\CV\SkillController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skillObj = Skill::findOrFail($id);
        $skillObj->delete();

        return redirect(action('Admin\CV\SkillController@index'));
    }
}