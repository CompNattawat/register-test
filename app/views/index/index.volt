{% extends "layouts/layouts.volt" %}
{% block contents %}

<body class='default'>
  <div id='jqxWidget'>
    <div style='float: left; width:100%;'>
      <div id='jqxTabs'>
        <ul style='margin-left: 10px;'>
          <li hasclosebutton='false'>หน้าหลัก</li>
          {#<li >JavaServer Pages</li>
          <li>Active Server Pages</li>#}
        </ul>
        <div>
          {% for class in masclasslevel %}
          {{ class.ClassLevelID }}
          {{ class.ClassGroupID }}
          {{ class.ClassLevelNameTh }}

          ///

          {% endfor %}
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


{% endblock %}
