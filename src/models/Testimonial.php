<?php
namespace Cursus\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Testimonial extends Eloquent {

  public function user(){
    return $this->hasOne('Cursus\models\User');
  }

}
?>
