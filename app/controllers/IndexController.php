<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
      $masclassgroup = masclassgroup::find();

      $this->view->setVar('masclassgroup',$masclassgroup);
    }

    // public function getdataAction()
    // {
    //   $masclassgroup = masclassgroup::find();
    //
    //   $this->view->setVar('masclassgroup',$masclassgroup);
    // }

}
