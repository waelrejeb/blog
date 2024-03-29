<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livre;

class LivresController extends Controller
{
    public function ajouterLivre(){
    	// dd($Request->all());
// var_dump($Request->all());
// die;
    	// echo $Request->nom."<br>";
    	//     	echo $Request->prenom."<br>";
    	//     	echo $Request['email'];

			return view('livre');

    }
public function postajouterLivre(Request $request){
	//dd($request);
$data=$request->validate([
	'titre'=>'required |min:5',
	'description'=>'required',
	'nbre_pages'=>'required',
	'auteur'=>'required'
	]);


   Livre::create($data);
    	// $livre = new Livre();
    	// $livre->titre=$request->titre;
    	// $livre->description=$request->description;
    	// $livre->save();
	// Livre::create($request->except('_token'));
	return back()->with('success','votre livre a été ajouté');


    	//return redirect()->route('pageAcceuil');

    }
    public function supprimerLivre($id){
    	
    	$livre_a_supprimer=Livre::find($id);//::where('id',$id)->first();
    	// dd($livre_a_supprimer);
    	$livre_a_supprimer->delete();
    	return back()->with('success','votre livre a été supprimer');

    }

    public function voirLivre($id)
    {
    	$livre_a_voir= Livre::find($id);
    	$livre_a_voir->get();
    	return view('voir_livre',['livre_a_voir'=>$livre_a_voir]);
    }
    public function editerLivre($id)
    {
         $livre_a_editer= Livre::find($id);

  

    	$livre_a_editer->get();
    	return view('edit_livre',['livre'=>$livre_a_editer]);  
    	  }



    	  public function updateLivre(Request $request,$id){



    	  	  $livre=Livre::find($id);


    	  	  $data=$request->validate([
				'titre'=>'required |min:5',
				'description'=>'required',
				'nbre_pages'=>'required',
				'auteur'=>'required'
				]);

    	  	  $livre->update($data);


    	  	  return view('edit_livre',['livre'=>$livre]); 
    	  }
}
