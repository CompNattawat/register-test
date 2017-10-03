<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
  public function initialize()
  {
  $this->assets->collection("css")
  ->addCss("public/assets/bootstrap/css/bootstrap.min.css")
  ->addCss("public/assets/font-awesome/css/font-awesome.min.css")
  ->addCss("public/assets/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css")
  ->addCss("public/assets/select2/css/select2.min.css")
  ->addCss("public/assets/ui.jqgrid.min.css")
  ->addCss("public/assets/sass/custom.css?".rand(0,999));

  $this->assets->collection("js")
  ->addJs("public/assets/jquery.min.js")
  ->addJs("public/assets/bootstrap/js/bootstrap.min.js")
  ->addJs("public/assets/moment.min.js")
  ->addJs("public/assets/jquery.jqgrid.min.js")
  ->addJs("public/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js")
  ->addJs("public/assets/select2/js/select2.min.js")
  ->addJs("public/assets/jquery-validation/js/jquery.validate.min.js")
  ->addJs("public/assets/data.js?".rand(0,999))
  ->addJs("public/assets/custom.js?".rand(0,999));
  }
}
