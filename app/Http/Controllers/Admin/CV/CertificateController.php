<?php
/**
 * Created by PhpStorm.
 * User: slavo
 * Date: 7.8.18
 * Time: 17:31
 */

namespace App\Http\Controllers\Admin\CV;


use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certifications = Certificate::all();


        return view('admin.cv.certifications.index', compact(['certifications']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $certificationObj = new Certificate();

        return view('admin.cv.certifications.edit', compact(['certificationObj']));
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

        Certificate::create($data);

        return redirect(action('Admin/CV/CertificationController@index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certificationObj = Certificate::findOrFail($id);

        return view('admin.cv.certifications.edit', compact(['certificationObj']));
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

        $certificationObj = Certificate::findOrFail($id);
        $certificationObj->update($data);

        return redirect(action('Admin/CV/CertificationController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $certificationObj = Certificate::findOrFail($id);
        $certificationObj->delete();

        return redirect(action('Admin/CV/CertificationController@index'));
    }
}