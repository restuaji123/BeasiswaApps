<?php

class NamacalonController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	   $pendaftaran = Pendaftarans::All();
		return View::make("Namacalon.index")->with("pendaftaran", $pendaftaran);
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
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pendaftaran = DB::table('pendaftarans')->where('id',$id)->first();
      $pendaftaran =
      ['pendaftaransbyid' => $pendaftaran];
  return View::make('Namacalon.edit', $pendaftaran);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
        'id' => 'required',
        'nm_peserta' => 'required',
        'j_kel' => 'required',
        'agama' => 'required',
        'alamat' => 'required',
        'nm_ortu' => 'required',
        'no_telp' => 'required',
        'nm_kk' => 'required',
        'hub_kel' => 'required'
        
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            echo "string";
            return Redirect::to('namacalon/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('pendaftarans')
      ->where('id', $id)
      ->update(array(
                  'id' => Input::get('id'),
                  'nm_peserta' => Input::get('nm_peserta'),
                  'j_kel' => Input::get('j_kel'),
                  'agama' => Input::get('agama'),
                  'alamat' => Input::get('alamat'),
                  'nm_ortu' => Input::get('nm_ortu'),
                  'no_telp' => Input::get('no_telp'),
                  'nm_kk' => Input::get('nm_kk'),
                  'hub_kel' => Input::get('hub_kel')
                 
            ));
 
      Session::flash('message', 'Data Berhasil Diubah');
      return Redirect::to('Namacalon');
      }

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$pendaftaran = Pendaftarans::find($id);
        $pendaftaran->delete();
        return Redirect::to("Namacalon");
	}


}
