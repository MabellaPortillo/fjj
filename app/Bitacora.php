<?php

namespace App;

use Auth;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
  protected $fillable = ['id_usuario','detalle'];

  public static function bitacora($detalle){

    if(Auth::check()==1){
      Bitacora::create([
        'id_usuario'=>Auth::user()->id,
        'detalle'=>$detalle,
      ]);
    }elseif(USer::count()>0){
      $usr=User::all();
      foreach ($usr as $u) {
        $id=$u->id;
      }
      Bitacora::create([
        'id_usuario'=>$id,
        'detalle'=>$detalle,
      ]);
    }
  }
  public static function buscar(){
    return Bitacora::orderBy('created_at')->paginate(8);
  }
}
