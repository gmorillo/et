<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Condition;
use App\Type;
use App\Artist;
use App\Artistimg;
use App\Style;
use App\Styleimg;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Image;
use DB;
use Redirect;


class ProfileController extends Controller
{
    public function index()
    {      
        return view('administration.main');
    }

    public function indexStyle()
    {      
        return view('administration.add-style');
    }

    

    public function getInfoArtist()
    {
        $residenteInvitado = Condition::get();
        $tattooPiercing = Type::get();
        return view('administration.add-artist',compact('residenteInvitado', 'tattooPiercing'));
    }

    public function addArtist(Request $request)
    {
        $data = [];
        $data = Artist::create([
            'condition_id' => $request->input('condition_id'),
            'type_id' => $request->input('type_id'),
            'name' => $request->input('name'),
        ]);

        if($request->hasFile('secondary_img')) 
        {
            // getting all of the post data
            $files = $request->file('secondary_img');
            $destinationPath = public_path('/img/artist-gallery/');
            
            // recorremos cada archivo y lo subimos individualmente
            foreach($files as $file) {
                
                $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) );
                $filename = "etnias-tattoo-albacete-".$random_number.'.'.$file->getClientOriginalExtension();
                $upload_success = $file->move($destinationPath,$filename);

                $img_data = [];
                $img_data = Artistimg::create([
                    'artist_id' => $data->id,
                    'img' => $filename,
                ]);
            }
        }
        return redirect('/profile')->with('message', 'El artista '. $data->name .' se ha creado correctamente!!! ');
    }

    public function getEditInfoArtist()
    {
        $artist =  Artist::where('status', 1)->get();
        $residenteInvitado = Condition::get();
        $tattooPiercing = Type::get();
        return view('administration.edit-artist',compact('artist', 'residenteInvitado', 'tattooPiercing'));
    }

    public function editArtist(Request $request, $id)
    {
        $artist =  Artist::where('id', $id)->first();
        $residenteInvitado = Condition::get();
        $tattooPiercing = Type::get();
        $photos = Artistimg::where('artist_id', $id)->get();

        return view('administration.detail-edit-info-artist',compact('residenteInvitado', 'tattooPiercing', 'artist', 'photos'));
    }

    public function deleteImg($id) {
        //para eliminar una única imágen
            $getPrincipalImageFile =   Artistimg::where('id', $id)->select('img')->first();
            $getNamePrincipalImgFile = explode(",", $getPrincipalImageFile->img);
            if(\File::exists(public_path('/img/artist-gallery/' . $getPrincipalImageFile->img)))
            {
                \File::delete(public_path('/img/artist-gallery/' . $getPrincipalImageFile->img));
            }
        //fin
        $deletePhotosData = Artistimg::where('id', $id)->delete();

        return Redirect::back()->with('message', 'Imágen eliminada correctamente!!! ');

    }

    public function editInfoArtist(Request $request, $id)
    {	
    	

        $artist =  Artist::where('id', $id)->first();
        $artist->condition_id = $request->input('condition_id');
        $artist->type_id = $request->input('type_id');
        $artist->name = $request->input('name');
        $artist->save();

        if($request->hasFile('secondary_img')) 
        {
            // getting all of the post data
            $files = $request->file('secondary_img');
            $destinationPath = public_path('/img/artist-gallery/');
            
            // recorremos cada archivo y lo subimos individualmente
            foreach($files as $file) {
                
                $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) );
                $filename = "etnias-tattoo-albacete-".$random_number.'.'.$file->getClientOriginalExtension();
                $upload_success = $file->move($destinationPath,$filename);

                $img_data = [];
                $img_data = Artistimg::create([
                    'artist_id' => $artist->id,
                    'img' => $filename,
                ]);
            }
        }

        return redirect('/profile/get-edit-info-artist')->with('message', 'El artista '. $artist->name .' se ha actualizado correctamente!!! ');

    }

    public function deleteArtist($id) {
        $deleteartist =  Artist::where('id', $id)->first();
        $deleteartist->status = '0';
        $deleteartist->save();

        return Redirect::back()->with('message', 'Se ha eliminado el registro correctamente');
    }

    public function addStyle(Request $request)
    {
        $data = [];
        $data = Style::create([
            'style' => $request->input('style'),
        ]);

        if($request->hasFile('secondary_img')) 
        {
            // getting all of the post data
            $files = $request->file('secondary_img');
            $destinationPath = public_path('/img/style-gallery/');
            
            // recorremos cada archivo y lo subimos individualmente
            foreach($files as $file) {
                
                $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) );
                $filename = $data->style."-etnias-tattoo-albacete-".$random_number.'.'.$file->getClientOriginalExtension();
                $upload_success = $file->move($destinationPath,$filename);

                $img_data = [];
                $img_data = Styleimg::create([
                    'style_id' => $data->id,
                    'img' => $filename,
                ]);
            }
        }
        return redirect('/profile')->with('message', 'El estilo '. $data->style .' se ha creado correctamente!!! ');
    }


    public function getEditInfoStyle()
    {
        $style =  Style::get();
        return view('administration.edit-style',compact('style'));
    }


    public function editStyle(Request $request, $id)
    {
        $style =  Style::where('id', $id)->first();
        $photos = Styleimg::where('style_id', $id)->get();

        return view('administration.detail-edit-info-style',compact('style', 'photos'));
    }

    public function deleteImgStyle($id) {
        //para eliminar una única imágen
            $getPrincipalImageFile =   Styleimg::where('id', $id)->select('img')->first();
            $getNamePrincipalImgFile = explode(",", $getPrincipalImageFile->img);
            if(\File::exists(public_path('/img/style-gallery/' . $getPrincipalImageFile->img)))
            {
                \File::delete(public_path('/img/style-gallery/' . $getPrincipalImageFile->img));
            }
        //fin
        $deletePhotosData = Styleimg::where('id', $id)->delete();

        return Redirect::back()->with('message', 'Imágen eliminada correctamente!!! ');

    }

    public function editInfoStyle(Request $request, $id)
    {   
        $style =  Style::where('id', $id)->first();
        $style->style = $request->input('style');
        $style->save();

        if($request->hasFile('secondary_img')) 
        {
            // getting all of the post data
            $files = $request->file('secondary_img');
            $destinationPath = public_path('/img/style-gallery/');
            
            // recorremos cada archivo y lo subimos individualmente
            foreach($files as $file) {
                
                $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) );
                $filename = $style->style."-etnias-tattoo-albacete-".$random_number.'.'.$file->getClientOriginalExtension();
                $upload_success = $file->move($destinationPath,$filename);

                $img_data = [];
                $img_data = Styleimg::create([
                    'style_id' => $style->id,
                    'img' => $filename,
                ]);
            }
        }

        return redirect('/profile/get-edit-info-style')->with('message', 'El estilo '. $style->style .' se ha actualizado correctamente!!! ');

    }


    public function deleteStyle($id) {
        $deleteStyle =  Style::where('id', $id)->first();
        //$deleteStyle->status = '0';
        $deleteStyle->delete();

        //para eliminar multiples imágenes
            $getSecondaryImageFile =   Styleimg::where('style_id', $id)->select('img')->get();
            $getNameSecondaryImgFile = explode(",", $getSecondaryImageFile);
            
            foreach ($getSecondaryImageFile as $images) {

                \File::delete(public_path('/img/style-gallery/' . $images->img));
            }
        //fin
        Styleimg::where('style_id', $id)->select('img')->delete();

        return Redirect::back()->with('message', 'Se ha eliminado el registro correctamente');
    }
}
