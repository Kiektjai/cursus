<?php
namespace Cursus\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent {

  public function testimonials(){
    return $this->hasMany('Cursus\models\Testimonial');
  }

}
?>
