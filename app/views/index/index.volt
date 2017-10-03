{% extends "layouts/layouts.volt" %}
{% block contents %}

<div id="tabs_panel" class="swiper-tabs">
  <div class="container-tabs">
    <ul id="tab-list" class="nav nav-tabs" role="tablist">
      <li class="active"><a href="#tabs_main" data-target="#tabs_main" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-home icon"></span> <span>หน้าแรก</span></a></li>
      {#<li class=""><a href="#tabs_1" data-target="#tabs_1" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-home icon"></span> <span>หน้ารอง</span></a></li>#}
    </ul>
  </div>
  <div class="tab-content">
    <div id="tabs_main" class="tab-pane active">
      &nbsp;
      เทส
      {% for class in masclassgroup %}
        {{ class.ClassGroupTh }}
      {% endfor %}
    </div>

  </div>
</div>



{% endblock %}
