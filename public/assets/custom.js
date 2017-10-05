$(document).ready(function () {
//grid

      // create jqxTabs.
                $('#jqxTabs').jqxTabs({ height: 600, width: '100%', theme: theme, showCloseButtons: true });

                $('.menu_list').click(function () {
                  var menu_id = $(this).data('id');
                  var tabs_name = $(this).data('name');

                  if (menu_id !== null) {

                    // $('.jqx-rc-b').addClass('grid_'+menu_id+'');
                    var test = $('.grid').append('<div id="grid_'+menu_id+'""></div>');

                    $('#jqxTabs').jqxTabs('addLast', tabs_name  ) ;
                    $('#jqxTabs').jqxTabs('ensureVisible', -1);

                    var selectedItem = $('#jqxTabs').jqxTabs('selectedItem');

                    if(selectedItem == 2){
                      $('#jqxTabs').jqxTabs('removeAt',selectedItem-1);
                    }

                    //data
                    var initGrid1 = function () {
                      var data = {};
                      var source =
                      {
                        url: 'index/getdataSchoolGroup',
                        datafields: [
                          { name: 'ClassGroupID' , type: 'string'},
                          { name: 'ClassGroupTh', type: 'string'},
                          { name: 'ClassGroupEn', type: 'string' },
                          { name: 'ClassGroupSorting', type: 'string' },
                          { name: 'edit'},
                          { name: 'delete'}
                        ],
                        datatype: "json",
                      };
                      var dataAdapter = new $.jqx.dataAdapter(source);

                      $("#grid_1").jqxGrid(
                        {
                          width: '100%',
                          height: '100%',
                          source: dataAdapter,
                          columnsresize: true,
                          showfilterrow: true,
                          filterable: true,
                          sortable: true,
                          pagerbuttonscount: 10,
                          pagermode: 'simple',
                          pageable: true,
                          showtoolbar: true,
                          rendertoolbar: function (toolbar) {
                              var container = $("<div style='margin: 5px;'></div>");
                              toolbar.append(container);
                              container.append('<button id="addrowbutton" ><span class="glyphicon glyphicon-plus"></span>เพิ่มรายการ</button>');
                              container.append('<button style="margin-left: 5px;" id="updaterowbutton" ><span class="glyphicon glyphicon-pencil"></span>แก้ไขรายการ</button>');
                              container.append('<button style="margin-left: 5px;" id="viewrowbutton" ><span class="glyphicon glyphicon-folder-open"></span>เรียกดูรายการ</button>');
                              container.append('<button style="margin-left: 5px;" id="deleterowbutton" ><span class="glyphicon glyphicon-trash"></span>ลบรายการ</button>');
                              $("#addrowbutton").jqxButton();
                              $("#updaterowbutton").jqxButton();
                              $("#viewrowbutton").jqxButton();
                              $("#deleterowbutton").jqxButton();

                              //set enable button
                              // var test = $("#grid_1").jqxGrid('getselectedrowindex');
                              // if(test == true){
                              //    $("#updaterowbutton").jqxButton("disable","updaterowbutton",true);
                              //    console.log(test);
                              // };

                              // create new row.
                              $("#addrowbutton").on('click', function () {
                                  var offset = $("#grid_1").offset();
                                  $("#formAddDataSchool").jqxWindow({ width:'35%',height:'44%',resizable: true, isModal: false, autoOpen: false, });
                                  $("#formAddDataSchool").jqxWindow('show');
                              });
                              // update row.
                              $("#updaterowbutton").on('click', function () {
                                  var datarow = $("#grid_1").jqxGrid('getselectedrowindex');
                                  $("#formEditDataSchool").jqxWindow({ width:'45%',height:'45%',resizable: true, isModal: false, autoOpen: false, });
                                  // get the clicked row's data and initialize the input fields.
                                  var dataRecord = $("#grid_1").jqxGrid('getrowdata', datarow);
                                  $("input[name=ClassGroupID]").val(dataRecord.ClassGroupID);
                                  $("input[name=ClassGroupTh]").val(dataRecord.ClassGroupTh);
                                  $("input[name=ClassGroupEn]").val(dataRecord.ClassGroupEn);
                                  $("input[name=ClassGroupSorting]").val(dataRecord.ClassGroupSorting);
                                  // show the popup window.
                                  $("#formEditDataSchool").jqxWindow('show');

                              });
                              // view row
                              $("#viewrowbutton").on('click', function () {
                                  var viewrow = $("#grid_1").jqxGrid('getselectedrowindex');
                                  $("#formViewDataSchool").jqxWindow({ width:'35%',height:'30%',resizable: true, isModal: false, autoOpen: false, });
                                  var dataRecord = $('#grid_1').jqxGrid('getrowdata', viewrow);
                                  // $(".ClassGroupID").append(dataRecord.ClassGroupID);
                                  $(".ClassGroupTh").append(dataRecord.ClassGroupTh);
                                  $(".ClassGroupEn").append(dataRecord.ClassGroupEn);
                                  $(".ClassGroupSorting").append(dataRecord.ClassGroupSorting);
                                  // show the popup window.
                                  $("#formViewDataSchool").jqxWindow('show');
                              });

                              // delete row.
                              $("#deleterowbutton").on('click', function () {
                                  var deleterow = $("#grid_1").jqxGrid('getselectedrowindex');
                                  $("#formDeleteDataSchool").jqxWindow({ width:'35%',height:'22%',resizable: true, isModal: false, autoOpen: false, });
                                  // get the clicked row's data and initialize the input fields.
                                  var dataRecord = $("#grid_1").jqxGrid('getrowdata', deleterow);
                                  $("input[name=ClassGroupID]").val(dataRecord.ClassGroupID);
                                  // show the popup window.
                                  $("#formDeleteDataSchool").jqxWindow('show');
                              });
                          },
                          columns: [
                            { text: '', sortable: false, filterable: false, editable: false,
                              columngroup: 'Data_class',
                              groupable: false, draggable: false, resizable: false,
                              datafield: '', columntype: 'number', width: 50,
                              cellsrenderer: function (row, column, value) {
                              return "<div style='margin:4px;'>" + (value + 1) + "</div>";
                                }
                            },
                            { text: 'ชื่อระดับ (Th)', datafield: 'ClassGroupTh',columngroup: 'Data_class'},
                            { text: 'ชื่อระดับ (En)', datafield: 'ClassGroupEn',columngroup: 'Data_class' },
                            { text: 'เรียบเรียงโดย', datafield: 'ClassGroupSorting',columngroup: 'Data_class'},
                            { text: 'แก้ไข', datafield: 'edit',filterable:false,columngroup: 'Data_class', columntype: 'button', cellsrenderer: function () {
                                return "Edit";
                                }, buttonclick: function (row) {
                                // open the popup window when the user clicks a button.
                                  editrow = row;
                                  $("#formEditDataSchool").jqxWindow({ width:'45%',height:'45%',resizable: true, isModal: false, autoOpen: false, });
                                  // get the clicked row's data and initialize the input fields.
                                  var dataRecord = $("#grid_1").jqxGrid('getrowdata', editrow);
                                  $("input[name=ClassGroupID]").val(dataRecord.ClassGroupID);
                                  $("input[name=ClassGroupTh]").val(dataRecord.ClassGroupTh);
                                  $("input[name=ClassGroupEn]").val(dataRecord.ClassGroupEn);
                                  $("input[name=ClassGroupSorting]").val(dataRecord.ClassGroupSorting);
                                  // show the popup window.
                                  $("#formEditDataSchool").jqxWindow('show');
                           		   }
                         		},
                            { text: 'ลบ', datafield: 'delete',filterable:false,columngroup: 'Data_class', columntype: 'button', cellsrenderer: function () {
                                return "Delete";
                                }, buttonclick: function (row) {
                                // open the popup window when the user clicks a button.
                                  deleterow = row;
                                  $("#formDeleteDataSchool").jqxWindow({ width:'35%',height:'22%',resizable: true, isModal: false, autoOpen: false, });
                                  // get the clicked row's data and initialize the input fields.
                                  var dataRecord = $("#grid_1").jqxGrid('getrowdata', deleterow);
                                  $("input[name=ClassGroupID]").val(dataRecord.ClassGroupID);
                                  // show the popup window.
                                  $("#formDeleteDataSchool").jqxWindow('show');
                           		   }
                         		},

                          ],
                          columngroups: [
                              { text: '<span class="ui-jqgrid-title-icon fa fa-list-alt"></span> ข้อมูลช่วงชั้น', align: 'left', name: 'Data_class' }
                          ]
                        });
                    }

                    var initGrid2 = function () {
                      var source =
                      {
                        url:'index/getdataSchoolLevel',
                        datafields: [
                          { name: 'ClassLevelID' , type: 'string'},
                          { name: 'ClassLevelNameTh', type: 'string'},
                          { name: 'ClassLevelNameEn', type: 'string' },
                          { name: 'ClassLevelSorting', type: 'string' },
                          { name: 'edit'},
                          { name: 'delete'}
                        ],
                        datatype: "json",
                        pagesize: 20,
                      };
                      var dataAdapter = new $.jqx.dataAdapter(source);

                      $("#grid_2").jqxGrid(
                        {
                          width: '100%',
                          height: 500,
                          source: dataAdapter,
                          columnsresize: true,
                          showfilterrow: true,
                          filterable: true,
                          sortable: true,
                          pagermode: 'simple',
                          pageable: true,
                          showtoolbar: true,
                          rendertoolbar: function (toolbar) {
                              var container = $("<div style='margin: 5px;'></div>");
                              toolbar.append(container);
                              container.append('<button id="addlevelbutton" ><span class="glyphicon glyphicon-plus"></span>เพิ่มรายการ</button>');
                              container.append('<button style="margin-left: 5px;" id="updatelevelbutton" ><span class="glyphicon glyphicon-pencil"></span>แก้ไขรายการ</button>');
                              container.append('<button style="margin-left: 5px;" id="viewlevelbutton" ><span class="glyphicon glyphicon-folder-open"></span>เรียกดูรายการ</button>');
                              container.append('<button style="margin-left: 5px;" id="deletelevelbutton" ><span class="glyphicon glyphicon-trash"></span>ลบรายการ</button>');
                              $("#addlevelbutton").jqxButton();
                              $("#updatelevelbutton").jqxButton();
                              $("#viewlevelbutton").jqxButton();
                              $("#deletelevelbutton").jqxButton();

                              // create new row.
                              $("#addlevelbutton").on('click', function () {
                                  var offset = $("#grid_2").offset();
                                  $("#formAddDataLevel").jqxWindow({ width:'35%',height:'50%',resizable: true, isModal: false, autoOpen: false, });
                                  $("#formAddDataLevel").jqxWindow('show');
                              });
                              // update row.
                              $("#updatelevelbutton").on('click', function () {
                                  var datarow = $("#grid_2").jqxGrid('getselectedrowindex');
                                  $("#formEditDataLevel").jqxWindow({ width:'45%',height:'45%',resizable: true, isModal: false, autoOpen: false, });
                                  // get the clicked row's data and initialize the input fields.
                                  var dataRecord = $("#grid_2").jqxGrid('getrowdata', datarow);
                                  console.log(dataRecord);
                                  $("input[name=ClassLevelID]").val(dataRecord.ClassLevelID);
                                  $("input[name=ClassLevelNameTh]").val(dataRecord.ClassLevelNameTh);
                                  $("input[name=ClassLevelNameEn]").val(dataRecord.ClassLevelNameEn);
                                  $("input[name=ClassLevelSorting]").val(dataRecord.ClassLevelSorting);
                                  // show the popup window.
                                  $("#formEditDataLevel").jqxWindow('show');

                              });
                              // view row
                              $("#viewlevelbutton").on('click', function () {
                                  var viewrow = $("#grid_2").jqxGrid('getselectedrowindex');
                                  $("#formViewDataLevel").jqxWindow({ width:'35%',height:'30%',resizable: true, isModal: false, autoOpen: false, });
                                  var dataRecord = $('#grid_2').jqxGrid('getrowdata', viewrow);
                                  // $(".ClassGroupID").append(dataRecord.ClassGroupID);
                                  $(".ClassLevelNameTh").append(dataRecord.ClassLevelNameTh);
                                  $(".ClassLevelNameEn").append(dataRecord.ClassLevelNameEn);
                                  $(".ClassLevelSorting").append(dataRecord.ClassLevelSorting);
                                  // show the popup window.
                                  $("#formViewDataLevel").jqxWindow('show');
                              });

                              // delete row.
                              $("#deletelevelbutton").on('click', function () {
                                  var deleterow = $("#grid_2").jqxGrid('getselectedrowindex');
                                  $("#formDeleteDataLevel").jqxWindow({ width:'35%',height:'22%',resizable: true, isModal: false, autoOpen: false, });
                                  // get the clicked row's data and initialize the input fields.
                                  var dataRecord = $("#grid_2").jqxGrid('getrowdata', deleterow);
                                  $("input[name=ClassLevelSorting]").val(dataRecord.ClassLevelID);
                                  // show the popup window.
                                  $("#formDeleteDataLevel").jqxWindow('show');
                              });
                          },
                          columns: [
                            { text: 'ชื่อระดับ (Th)', datafield: 'ClassLevelNameTh',columngroup: 'Data_level' },
                            { text: 'ชื่อระดับ (En)', datafield: 'ClassLevelNameEn',columngroup: 'Data_level' },
                            { text: 'เรียงลำดับ', datafield: 'ClassLevelSorting',columngroup: 'Data_level' },
                            { text: 'แก้ไข', datafield: 'edit',filterable:false,columngroup: 'Data_class', columntype: 'button', cellsrenderer: function () {
                                return "Edit";
                                }, buttonclick: function (row) {
                                // open the popup window when the user clicks a button.
                                  editrow = row;
                                  $("#formEditDataLevel").jqxWindow({ width:'45%',height:'45%',resizable: true, isModal: false, autoOpen: false, });
                                  // get the clicked row's data and initialize the input fields.
                                  var dataRecord = $("#grid_2").jqxGrid('getrowdata', editrow);
                                  $("input[name=ClassLevelID]").val(dataRecord.ClassLevelID);
                                  $("input[name=ClassLevelNameTh]").val(dataRecord.ClassLevelNameTh);
                                  $("input[name=ClassLevelNameEn]").val(dataRecord.ClassLevelNameEn);
                                  $("input[name=ClassLevelSorting]").val(dataRecord.ClassLevelSorting);
                                  // show the popup window.
                                  $("#formEditDataLevel").jqxWindow('show');
                           		   }
                         		},
                            { text: 'ลบ', datafield: 'delete',filterable:false,columngroup: 'Data_class', columntype: 'button', cellsrenderer: function () {
                                return "Delete";
                                }, buttonclick: function (row) {
                                // open the popup window when the user clicks a button.
                                  deleterow = row;
                                  $("#formDeleteDataLevel").jqxWindow({ width:'35%',height:'22%',resizable: true, isModal: false, autoOpen: false, });
                                  // get the clicked row's data and initialize the input fields.
                                  var dataRecord = $("#grid_2").jqxGrid('getrowdata', deleterow);
                                  $("input[name=ClassLevelID]").val(dataRecord.ClassLevelID);
                                  // show the popup window.
                                  $("#formDeleteDataLevel").jqxWindow('show');
                           		   }
                         		},
                          ],
                          columngroups: [
                              { text: '<span class="ui-jqgrid-title-icon fa fa-list-alt"></span> ข้อมูลระดับ', align: 'left', name: 'Data_level' }
                          ]
                        });
                    };
                    // init widgets.
                    switch (menu_id) {
                      case 1:
                        initGrid1();
                        $('#grid_2').remove();
                        break;
                      case 2:
                        initGrid2();
                        $('#grid_1').remove();
                        break;
                        }

                  }


                });


                // buttons.

                $(".btn-close").click(function () {
                      $(".data-modal").jqxWindow('hide');
                });

                //send data school group

                $(function () {
                  $('.formAddDataSchool').on('submit',function (e) {
                    $.ajax({
                        type: 'post',
                        url: 'index/AddDataSchool',
                        data: $(this).serialize(),
                        success: function () {
                            $(".data-modal").jqxWindow('hide');
                            $("#grid_1").jqxGrid('updatebounddata');
                        }
                    });
                    e.preventDefault();
                  });
                });

                $(function () {
                  $('.formEditDataSchool').on('submit',function (e) {
                    $.ajax({
                        type: 'post',
                        url: 'index/EditDataSchool',
                        data: $(this).serialize(),
                        success: function () {
                            $(".data-modal").jqxWindow('hide');
                            $("#grid_1").jqxGrid('updatebounddata');
                        }
                    });
                    e.preventDefault();
                  });
                });

                $(function () {
                  $('.formDeleteDataSchool').on('submit',function (e) {
                    var data = $("input[name=ClassGroupID]").val();
                    $.ajax({
                        type: 'post',
                        url: 'index/DeleteDataSchool',
                        data : {id:data},
                        success: function () {
                            $(".data-modal").jqxWindow('hide');
                            $("#grid_1").jqxGrid('updatebounddata');
                            alert(response);
                        }
                    });
                    e.preventDefault();
                  });
                });

               //send data school group

               //send data school level

               $(function () {
                 $('.formAddDataLevel').on('submit',function (e) {
                   $.ajax({
                       type: 'post',
                       url: 'index/AddDataLevel',
                       data: $(this).serialize(),
                       success: function () {
                           $(".data-modal").jqxWindow('hide');
                           $("#grid_2").jqxGrid('updatebounddata');
                       }
                   });
                   e.preventDefault();
                 });
               });

               $(function () {
                 $('.formEditDataLevel').on('submit',function (e) {
                   $.ajax({
                       type: 'post',
                       url: 'index/EditDataLevel',
                       data: $(this).serialize(),
                       success: function () {
                           $(".data-modal").jqxWindow('hide');
                           $("#grid_2").jqxGrid('updatebounddata');
                       }
                   });
                   e.preventDefault();
                 });
               });

               $(function () {
                 $('.formDeleteDataLevel').on('submit',function (e) {
                   var data = $("input[name=ClassLevelID]").val();
                   $.ajax({
                       type: 'post',
                       url: 'index/DeleteDataLevel',
                       data : {id:data},
                       success: function () {
                           $(".data-modal").jqxWindow('hide');
                           $("#grid_2").jqxGrid('updatebounddata');
                           alert(response);
                       }
                   });
                   e.preventDefault();
                 });
               });

                //send data school level



});
