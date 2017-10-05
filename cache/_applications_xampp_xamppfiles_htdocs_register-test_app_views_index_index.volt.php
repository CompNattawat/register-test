<!-- header -->
<div class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-brand">Example &nbsp;</div>

    </div>
    <div class="navbar-collapse collapse">

      <ul class="nav navbar-nav navbar-menu">
        <li><a href="#">หน้าแรก</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">ข้อมูลหลัก <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu"><a href="#">โครงสร้างโรงเรียน <span class="caret-right"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#" data-id="1" data-name="ข้อมูลช่วงชั้น" class="menu_list"> ข้อมูลช่วงชั้น</a></li>
                <li><a href="#" data-id="2" data-name="ข้อมูลระดับ" class="menu_list"> ข้อมูลระดับ</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu"><a href="#">ข้อมูลหลักทะเบียน <span class="caret-right"></span></a>
              <ul class="dropdown-menu"><li><a href="#" >ข้อมูลกลุ่มสาระวิชา</a></li>
                <li><a href="#" >ข้อมูลประเภทรายวิชา</a></li>
                <li><a href="#" >ข้อมูลรายวิชา</a></li>
                <li><a href="#" >ข้อมูลคำนำหน้าชื่อ</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">ระเบียน <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" >ข้อมูลปีการศึกษา</a></li>
            <li><a href="#" >ข้อมูลหลักสตร</a></li>
            <li><a href="#" >ข้อมูลอาจารย์</a></li>
            <li><a href="#" >ข้อมูลนักเรียน</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> &nbsp;จัดการระบบ <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" >ข้อมูลโครงสร้างระบบ</a></li>
            <li><a href="#" >ข้อมูลการใช้งาน</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right hidden-xs">
        <li class="divider-vertical"></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/example/backend/index/th" >ภาษาไทย</a>
              <li><a href="/example/backend/index/en" >ภาษาอังกฤษ</a>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- header -->

    <!-- content -->
    <div class="container-fluid container-body">
      <!-- BEGIN CONTENT BODY -->
        

<body class='default'>
  <div id='jqxWidget'>
    <div style='float: left; width:100%;'>
      <div id='jqxTabs'>
        <ul style='margin-left: 10px;'>
          <li hasclosebutton='false'>หน้าหลัก</li>
          
        </ul>
        <div>
          <?php foreach ($masclasslevel as $class) { ?>
          <?= $class->ClassLevelID ?>
          <?= $class->ClassGroupID ?>
          <?= $class->ClassLevelNameTh ?>

          ///

          <?php } ?>
        </div>
        <div class="grid">
        </div>
        <!-- Modal Zone -->

        <!-- Modal Group -->

        <div class="data-modal" id="formAddDataSchool">
          <div >เพิ่มข้อมูล</div>
          <form class="formAddDataSchool">
            <div class="jqx-window-content-body">

              <div class="form-group">
                <label class="label-control" for="ClassGroupTh">ช่วงชั้น*(Th) :</label>
                <input class="form-control" type="text" class="ClassGroupTh" name="ClassGroupTh">
              </div>

              <div class="form-group">
                <label class="label-control" for="ClassGroupEn">ช่วงชั้น (En) :</label>
                <input class="form-control" type="text" class="ClassGroupEn" name="ClassGroupEn">
              </div>

              <div class="form-group">
                <label class="label-control" for="ClassGroupSorting">เรียงลำดับ * :</label>
                <input class="form-control" type="text" class="ClassGroupSorting" name="ClassGroupSorting">
              </div>

              <div class="jqx-window-footer">
                <button type="button" class="btn btn-default btn-close" >ยกเลิก</button>
                <input type="submit" class="btn btn-primary btn-save" value="บันทึก">
              </div><!--/.jqx-windowfooter-->
            </div><!--/.jqx-windowbody-->
          </form>
        </div><!-- /.modal -->


        <div class="data-modal" id="formEditDataSchool">
          <div >แก้ไขข้อมูล</div>
          <form class="formEditDataSchool">
            <div class="jqx-window-content-body">
              <!-- Hidden Zone -->
              <input type="hidden" name="ClassGroupID" class="ClassGroupID" value="">

              <div class="form-group">
                <label class="label-control" for="ClassGroupTh">ช่วงชั้น*(Th) :</label>
                <input class="form-control" type="text" class="ClassGroupTh" name="ClassGroupTh">
              </div>

              <div class="form-group">
                <label class="label-control" for="ClassGroupEn">ช่วงชั้น (En) :</label>
                <input class="form-control" type="text" class="ClassGroupEn" name="ClassGroupEn">
              </div>

              <div class="form-group">
                <label class="label-control" for="ClassGroupSorting">เรียงลำดับ * :</label>
                <input class="form-control" type="text" class="ClassGroupSorting" name="ClassGroupSorting">
              </div>

              <div class="jqx-window-footer">
                <button type="button" class="btn btn-default btn-close" >ยกเลิก</button>
                <input type="submit" class="btn btn-primary btn-save" value="บันทึก">
              </div><!--/.jqx-windowfooter-->
            </div><!--/.jqx-windowbody-->
          </form>
        </div><!-- /.modal -->

        <div class="data-modal" id="formViewDataSchool">
          <div >ดูข้อมูล</div>
          <form class="formViewDataSchool">
            <div class="jqx-window-content-body-view">
              <div class="form-group">
                <label class="label-control" for="ClassGroupTh">ช่วงชั้น*(Th) : </label>
                <label class="label-control ClassGroupTh col-md-offset-1" ></label>
              </div>

              <div class="form-group">
                <label class="label-control" for="ClassGroupEn">ช่วงชั้น (En) :</label>
                <label class="label-control ClassGroupEn col-md-offset-1" ></label>
              </div>

              <div class="form-group">
                <label class="label-control" for="ClassGroupSorting">เรียงลำดับ * :</label>
                <label class="label-control ClassGroupSorting col-md-offset-1" ></label>
              </div>

              <div class="jqx-window-footer">
                <button type="button" class="btn btn-default btn-close" >ปิด</button>
              </div><!--/.jqx-windowfooter-->
            </div><!--/.jqx-windowbody-->
          </form>
        </div><!-- /.modal -->

        <div class="data-modal" id="formDeleteDataSchool">
          <div >ลบข้อมูล </div>
          <form class="formDeleteDataSchool">
            <div class="jqx-window-content-body">
              <!-- Hidden Zone -->
              <input type="hidden" name="ClassGroupID" class="ClassGroupID" value="">

              <div class="form-group">
                <label class="label-control" > คุณต้องการลบข้อมูลที่ถูกเลือก ใช่หรือไม่? </label>
              </div>

              <div class="jqx-window-footer">
                <button type="button" class="btn btn-default btn-close" >ยกเลิก</button>
                <input type="submit" class="btn btn-danger btn-delete" value="บันทึก">
              </div><!--/.jqx-windowfooter-->
            </div><!--/.jqx-windowbody-->
          </form>
        </div><!-- /.modal -->

        <!-- Modal Level -->

        <div class="data-modal" id="formAddDataLevel">
          <div >เพิ่มข้อมูล</div>
          <form class="formAddDataLevel">
            <div class="jqx-window-content-body">

              <div class="form-group">
                <label class="label-control" for="ClassGroupID">ช่วงชั้นที่ * :</label>
                <input class="form-control" type="text" class="ClassGroupID" name="ClassGroupID">
              </div>

              <div class="form-group">
                <label class="label-control" for="ClassLevelNameTh">ชื่อระดับ *(Th) :</label>
                <input class="form-control" type="text" class="ClassLevelNameTh" name="ClassLevelNameTh">
              </div>

              <div class="form-group">
                <label class="label-control" for="ClassLevelNameEn">ชื่อระดับ (En) :</label>
                <input class="form-control" type="text" class="ClassLevelNameEn" name="ClassLevelNameEn">
              </div>

              <div class="form-group">
                <label class="label-control" for="ClassLevelSorting">เรียงลำดับ * :</label>
                <input class="form-control" type="text" class="ClassLevelSorting" name="ClassLevelSorting">
              </div>

              <div class="jqx-window-footer">
                <button type="button" class="btn btn-default btn-close" >ยกเลิก</button>
                <input type="submit" class="btn btn-primary btn-save" value="บันทึก">
              </div><!--/.jqx-windowfooter-->
            </div><!--/.jqx-windowbody-->
          </form>
        </div><!-- /.modal -->


        <div class="data-modal" id="formEditDataLevel">
          <div >แก้ไขข้อมูล</div>
          <form class="formEditDataLevel">
            <div class="jqx-window-content-body">
              <!-- Hidden Zone -->
              <input type="hidden" name="ClassLevelID" class="ClassLevelID" value="">

              <div class="form-group">
                <label class="label-control" for="ClassLevelNameTh">ชื่อระดับ*(Th) :</label>
                <input class="form-control" type="text" class="ClassLevelNameTh" name="ClassLevelNameTh">
              </div>

              <div class="form-group">
                <label class="label-control" for="ClassLevelNameEn">ชื่อระดับ (En) :</label>
                <input class="form-control" type="text" class="ClassLevelNameEn" name="ClassLevelNameEn">
              </div>

              <div class="form-group">
                <label class="label-control" for="ClassLevelSorting">เรียงลำดับ * :</label>
                <input class="form-control" type="text" class="ClassLevelSorting" name="ClassLevelSorting">
              </div>

              <div class="jqx-window-footer">
                <button type="button" class="btn btn-default btn-close" >ยกเลิก</button>
                <input type="submit" class="btn btn-primary btn-save" value="บันทึก">
              </div><!--/.jqx-windowfooter-->
            </div><!--/.jqx-windowbody-->
          </form>
        </div><!-- /.modal -->

        <div class="data-modal" id="formViewDataLevel">
          <div >ดูข้อมูล</div>
          <form class="formViewDataLevel">
            <div class="jqx-window-content-body-view">
              <!-- Hidden Zone -->

              <div class="form-group">
                <label class="label-control" for="ClassLevelNameTh">ชื่อระดับ*(Th) : </label>
                <label class="label-control ClassLevelNameTh col-md-offset-1" ></label>
              </div>

              <div class="form-group">
                <label class="label-control" for="ClassLevelNameEn">ชื่อระดับ (En) :</label>
                <label class="label-control ClassLevelNameEn col-md-offset-1" ></label>
              </div>

              <div class="form-group">
                <label class="label-control" for="ClassLevelSorting">เรียงลำดับ * :</label>
                <label class="label-control ClassLevelSorting col-md-offset-1" ></label>
              </div>

              <div class="jqx-window-footer">
                <button type="button" class="btn btn-default btn-close" >ปิด</button>
              </div><!--/.jqx-windowfooter-->
            </div><!--/.jqx-windowbody-->
          </form>
        </div><!-- /.modal -->

        <div class="data-modal" id="formDeleteDataLevel">
          <div >ลบข้อมูล </div>
          <form class="formDeleteDataLevel">
            <div class="jqx-window-content-body">
              <!-- Hidden Zone -->
              <input type="hidden" name="ClassLevelID" class="ClassLevelID" value="">

              <div class="form-group">
                <label class="label-control" > คุณต้องการลบข้อมูลที่ถูกเลือก ใช่หรือไม่? </label>
              </div>

              <div class="jqx-window-footer">
                <button type="button" class="btn btn-default btn-close" >ยกเลิก</button>
                <input type="submit" class="btn btn-danger btn-delete" value="บันทึก">
              </div><!--/.jqx-windowfooter-->
            </div><!--/.jqx-windowbody-->
          </form>
        </div><!-- /.modal -->
      </div>

    </div>


  </div>
</body>




    </div>

    <!-- content -->
