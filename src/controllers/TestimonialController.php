<?php
namespace Cursus\controllers;

use duncan3dc\Laravel\BladeInstance;
use Cursus\models\Testimonial;
use Cursus\Validation\Validator;
use Cursus\auth\LoggedIn;

class TestimonialController extends BaseController{

  public function getShowTestimonials(){
    $testimonials = Testimonial::all();

    echo $this->blade->render('testimonials', ['testimonials' => $testimonials,]);
  }

  public function getShowAdd(){
    echo $this->blade->render('add-testimonial', [
      'signer' => $this->signer,
    ]);
  }

  public function postShowAdd(){
    $errors = [];

    if (!$this->signer->validateSignature($_POST['_token'])) {
        header('HTTP/1.0 400 Bad Request');
        exit;
    }

    $validation_data = [
      "title" => "min:3",
      "testimonial" => "min:10",
    ];

    // validate DOMCdataSection
    $validator = new Validator;

    $errors = $validator->isValid($validation_data);

    // if validation fails, go back to register
    // page and display error message

    if(sizeof($errors) > 0){
      $_SESSION['msg'] = $errors;
      echo $this->blade->render('add-testimonial', [
        'signer' => $this->signer,
      ]);
      unset($_SESSION['msg']);
      exit();
    }

    $testimonial = new Testimonial;
    $testimonial->title = $_REQUEST['title'];
    $testimonial->testimonial = $_REQUEST['testimonial'];
    $testimonial->user_id = LoggedIn::user()->id;
    $testimonial->save();

    header("Location: /testimonial-saved");
    exit();

  }

}

?>
