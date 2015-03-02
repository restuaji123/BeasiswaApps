<?php

class PendaftaranController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make("Pendaftaran.index");
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		 $rules = array(
        'no_peserta' => 'required',
        'nm_peserta' => 'required',
        'j_kel' => 'required',
        'agama' => 'required',
        'alamat' => 'required',
        'nm_ortu' => 'required',
        'no_tlp' => 'required',
        'nm_kk' => 'required',
        'hub_kel' => 'required'
           );
    
        $validation = Validator::make(Input::all(), $rules);
        if($validation->fails()) {
        return Redirect::back()->withInput()->withErrors($validation->messages());
        }
        else{
        $pendaftaran = new Pendaftarans;

		$pendaftaran->id = Input::get('no_peserta');
		$pendaftaran->nm_peserta = Input::get('nm_peserta');
		$pendaftaran->j_kel = Input::get('j_kel');
		$pendaftaran->agama = Input::get('agama');
		$pendaftaran->alamat = Input::get('alamat');
        $pendaftaran->nm_ortu = Input::get('nm_ortu');
        $pendaftaran->no_tlp = Input::get('no_tlp');
        $pendaftaran->nm_kk = Input::get('nm_kk');
        $pendaftaran->hub_kel = Input::get('hub_kel');

		$pendaftaran->save();

		return Redirect::to('Pendaftaran');
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	   
		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
