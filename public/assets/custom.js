$(document).ready(function () {

  $('.menu_list').click(function () {
    var menu_id = $(this).data('id');
    var tabs_name = $(this).data('name');

    console.log(menu_id);
    console.log(tabs_name);

      if (menu_id !== null) {
        $('li').removeClass('active');
        $('#tab-list').append($('<li class="active"><a href="#tabs_' + menu_id + '" role="tab" data-toggle="tab">' + tabs_name + '<button class="close" type="button" title="Remove this page">×</button></a></li>'));
        $('.tab-pane').removeClass('active');
        $('.tab-content').append($('<div class="tab-pane active" id="tabs_' + menu_id + '"> '+ tabs_name +' content </div>'));
        $('#tabs_'+menu_id+'').append('<table id="grid'+menu_id+'" style="width:100%;"></table>');

        //data
        $(function () {
          "use strict";
          $("#grid1").jqGrid({
            colModel:[
              {name:"ClassGroupTh",editable:true,editrules:{required:true},search:true,label:"ช่วงชั้น (Th)",},
              {name:"ClassGroupEn",editable:true,search:true,label:"ช่วงชั้น (En)",},
              {name:"ClassGroupSorting",align:"center",editable:true,editrules:{required:true,integer:true},search:true,label:"เรียงลำดับ",},
              {name:'Edit',label:'แก้ไข',width:48, template:'button', formatoptions:{modal:true,caption:"แก้ไขรายการ",action:"edit",icon:"glyphicon glyphicon-pencil",url:"/example/backend/master/masclassgroup/getform/edit"}},
              {name:'Delete',label:'ลบ',width:48, template:'button', formatoptions:{color:"red",caption:"ลบรายการ",action:"delete",icon:"glyphicon glyphicon-trash"}},
              ],
            caption:"ข้อมูลช่วงชั้น",
            captionicon:"fa fa-list-alt",
            toolbar:[true,"top"],
            // editurl:"/example/backend/master/masclassgroup/setdata",
            globalId:"1",
            parentId:"",
            tabsPanelId:"",
            datatype:"json",
            pager:"#pager_1",
            url:"/public/assets/data",
            locale:"th",
            }
          );


        });

        //data
      }
  });

  $('#tab-list').on('click','.close',function(){
    var menu_tabs = $(this).parents('a').attr('href');
    console.log(menu_tabs);
    $(this).parents('li').remove();
    $(menu_tabs).remove();
    $("#tab-list li:first").addClass("active");
    $('.tab-pane').addClass('active');
  });



});
