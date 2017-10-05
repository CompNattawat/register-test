<?php

class IndexController extends ControllerBase
{


    public function indexAction()
    {
      $masclassgroup = masclassgroup::find();

      $this->view->setVar('masclassgroup',$masclassgroup);

      $masclasslevel = masclasslevel::find();

      $this->view->setVar('masclasslevel',$masclasslevel);

    }

    public function getdataSchoolGroupAction()
    {
      $masclassgroup = masclassgroup::find();

      $data = json_encode($masclassgroup);
      $response = new \Phalcon\Http\Response();

      $response->setContent($data);

      return $response;
    }

    public function AddDataSchoolAction()
    {
      $this->view->disable();

      $model = new MasClassGroup();

      $model->ClassGroupTh = $this->request->getPost('ClassGroupTh');
      $model->ClassGroupEn = $this->request->getPost('ClassGroupEn');
      $model->ClassGroupSorting = $this->request->getPost('ClassGroupSorting');

      // $data->assign($array);
      $model->save();
    }

    public function EditDataSchoolAction()
    {
      $this->view->disable();

      $model = new MasClassGroup();
      $array = $this->request->getPost();

      $data = $model->findFirst($array['ClassGroupID']);

      $data->assign($array);
      $data->save();

    }

    public function DeleteDataSchoolAction()
    {
      // $this->view->disable();

      $model = new MasClassGroup();

      $array = $this->request->getPost('id');

      $data = $model->findFirst($array);

      $data->delete();
    }

    public function getdataSchoolLevelAction()
    {
      $masclasslevel = masclasslevel::find();

      $data = json_encode($masclasslevel);
      $response = new \Phalcon\Http\Response();

      $response->setContent($data);

      return $response;
    }

    public function AddDataLevelAction()
    {
      $this->view->disable();

      $model = new masclasslevel();

      $model->ClassGroupID = $this->request->getPost('ClassGroupID');
      $model->ClassLevelNameTh = $this->request->getPost('ClassLevelNameTh');
      $model->ClassLevelNameEn = $this->request->getPost('ClassLevelNameEn');
      $model->ClassLevelSorting = $this->request->getPost('ClassLevelSorting');

      // $data->assign($array);
      $model->save();
    }

    public function EditDataLevelAction()
    {
      $this->view->disable();

      $model = new masclasslevel();
      $array = $this->request->getPost();

      $data = $model->findFirst($array['ClassLevelID']);

      $data->assign($array);
      $data->save();

    }

    public function DeleteDataLevelAction()
    {
      $this->view->disable();

      $model = new masclasslevel();

      $array = $this->request->getPost('id');

      $data = $model->findFirst($array);

      $data->delete();
    }

}
