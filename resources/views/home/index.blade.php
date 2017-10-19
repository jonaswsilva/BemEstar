@extends('layout/layout')

@section('content')


@can('manager-access')
<div class="col-xs-12 col-sm-6 widget-container-col" id="widget-container-col-2">
  <div class="widget-box widget-color-blue" id="widget-box-2">
    <div class="widget-header">
      <h5 class="widget-title bigger lighter">
        <i class="ace-icon fa fa-table"></i>
        Pacientes de hoje
      </h5>

      <div class="widget-toolbar widget-toolbar-light no-border">
        <select id="simple-colorpicker-1" class="hide">
          <option selected="" data-class="blue" value="#307ECC">#307ECC</option>
          <option data-class="blue2" value="#5090C1">#5090C1</option>
          <option data-class="blue3" value="#6379AA">#6379AA</option>
          <option data-class="green" value="#82AF6F">#82AF6F</option>
          <option data-class="green2" value="#2E8965">#2E8965</option>
          <option data-class="green3" value="#5FBC47">#5FBC47</option>
          <option data-class="red" value="#E2755F">#E2755F</option>
          <option data-class="red2" value="#E04141">#E04141</option>
          <option data-class="red3" value="#D15B47">#D15B47</option>
          <option data-class="orange" value="#FFC657">#FFC657</option>
          <option data-class="purple" value="#7E6EB0">#7E6EB0</option>
          <option data-class="pink" value="#CE6F9E">#CE6F9E</option>
          <option data-class="dark" value="#404040">#404040</option>
          <option data-class="grey" value="#848484">#848484</option>
          <option data-class="default" value="#EEE">#EEE</option>
        </select>
      </div>
    </div>

    <div class="widget-body">
      <div class="widget-main no-padding">
        <table class="table table-striped table-bordered table-hover">
          <thead class="thin-border-bottom">
            <tr>
              <th>
                <i class="ace-icon fa fa-user"></i>
                Paciente
              </th>

              <th>
                <i class="ace-icon fa fa-user-md"></i>
                Profissional
              </th>
              <th>
                <i class="ace-icon fa fa-clock-o"></i>
                Hora
              </th>
              <th class="hidden-480">Status</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($schedulestoday as $schedule)
            <tr>
              <td class="">{{ $schedule->patient->person->name }}</td>

              <td>{{ $schedule->professional->person->name }}</td>
              <td>{{ $schedule->hour }}</td>
              <td class="hidden-480">
                <span class="label label-warning">Pendente</span>
              </td>
            </tr>
            @endforeach




          </tbody>
        </table>

      </div>
    </div>
  </div>
</div><!-- /.span -->

<div class="col-xs-12 col-sm-3 widget-container-col" id="widget-container-col-6">
  <div class="widget-box widget-color-dark light-border" id="widget-box-6">
    <div class="widget-header">
      <h5 class="widget-title smaller">Telefones Úteis</h5>


    </div>

    <div class="widget-body">
      <div class="widget-main padding-6">
        <div class="alert alert-info"> Polícia <div class="widget-toolbar">
          <span class="badge badge-danger">190</span>
        </div></div>
      </div>
      <div class="widget-main padding-6">
        <div class="alert alert-info"> Bombeiros <div class="widget-toolbar">
          <span class="badge badge-warning">193</span>
        </div></div>
      </div>
    </div>
  </div>
</div>

<div class="col-xs-12 col-sm-3 widget-container-col" id="widget-container-col-5">
  <div class="widget-box" id="widget-box-5">
    <div class="widget-header">
      <h5 class="widget-title smaller purple">Calendário</h5>


    </div>

    <div class="widget-body">
      <div class="widget-main padding-6">
        <iframe src="https://calendar.google.com/calendar/embed?height=200&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=je5qc3ql8st90vvidipsprtosg%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=America%2FSao_Paulo" style="border-width:0" width="250" height="200" frameborder="0" scrolling="no"></iframe>
      </div>
    </div>
  </div>
</div>

@endcan
@can('admin-access')
<div class="col-sm-7 infobox-container">
  <div class="infobox infobox-green">
    <div class="infobox-icon">
      <i class="ace-icon fa fa-list"></i>
    </div>

    <div class="infobox-data">
      <span class="infobox-data-number">{{ @$countschedules }}</span>
      <div class="infobox-content">Consultas Marcadas</div>
    </div>


  </div>

  <div class="infobox infobox-blue">
    <div class="infobox-icon">
      <i class="ace-icon fa fa-check-square-o"></i>
    </div>

    <div class="infobox-data">
      <span class="infobox-data-number">{{ @$schedulestoday }}</span>
      <div class="infobox-content">Consultas Hoje</div>
    </div>


  </div>

  <div class="infobox infobox-pink">
    <div class="infobox-icon">
      <i class="ace-icon fa fa-file-o"></i>
    </div>

    <div class="infobox-data">
      <span class="infobox-data-number">{{ @$countsessions }}</span>
      <div class="infobox-content">Sessões de Hoje</div>
    </div>

  </div>



  <div class="infobox infobox-red">
    <div class="infobox-icon">
      <i class="ace-icon fa fa-user"></i>
    </div>

    <div class="infobox-data">
      <span class="infobox-data-number">{{ @$countspatients }}</span>
      <div class="infobox-content">Pacientes</div>
    </div>
  </div>


  <div class="infobox infobox-blue2">
      <div class="infobox-progress">
        <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
          <span class="percent">42</span>
        </div>
      </div>

      <div class="infobox-data">
        <span class="infobox-text">42</span>

        <div class="infobox-content">Consultas realizadas</div>
      </div>
    </div>

    <div class="infobox infobox-orange2">
      <div class="infobox-chart">
        <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
      </div>

      <div class="infobox-data">
        <span class="infobox-data-number">6,251</span>
        <div class="infobox-content">Consultas no mês</div>
      </div>


    </div>

  <div class="space-6"></div>

  <div class="infobox infobox-green infobox-small infobox-dark">
    <div class="infobox-progress">
      <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
        <span class="percent">61</span>%
      </div>
    </div>

    <div class="infobox-data">
      <div class="infobox-content">Task</div>
      <div class="infobox-content">Completion</div>
    </div>
  </div>

  <div class="infobox infobox-blue infobox-small infobox-dark">
    <div class="infobox-chart">
      <span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
    </div>

    <div class="infobox-data">
      <div class="infobox-content">Earnings</div>
      <div class="infobox-content">$32,000</div>
    </div>
  </div>

  <div class="infobox infobox-grey infobox-small infobox-dark">
    <div class="infobox-icon">
      <i class="ace-icon fa fa-download"></i>
    </div>

    <div class="infobox-data">
      <div class="infobox-content">Downloads</div>
      <div class="infobox-content">1,205</div>
    </div>
  </div>
</div>

<div class="col-sm-5">
  <div class="widget-box">
    <div class="widget-header widget-header-flat widget-header-small">
      <h5 class="widget-title">
        <i class="ace-icon fa fa-signal"></i>
        Traffic Sources
      </h5>

      <div class="widget-toolbar no-border">
        <div class="inline dropdown-hover">
          <button class="btn btn-minier btn-primary">
            Nesta Semana
            <i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
          </button>

          <ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
            <li class="active">
              <a href="#" class="blue">
                <i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
                This Week
              </a>
            </li>

            <li>
              <a href="#">
                <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                Last Week
              </a>
            </li>

            <li>
              <a href="#">
                <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                This Month
              </a>
            </li>

            <li>
              <a href="#">
                <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                Last Month
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="widget-body">
      <div class="widget-main">
        <div id="piechart-placeholder"></div>

        <div class="hr hr8 hr-double"></div>

        <div class="clearfix">
          <div class="grid3">
            <span class="grey">
              <i class="ace-icon fa fa-facebook-square fa-2x blue"></i>
              &nbsp; Curtidas
            </span>
            <h4 class="bigger pull-right">55</h4>
          </div>

          <div class="grid3">
            <span class="grey">
              <i class="ace-icon fa fa-twitter-square fa-2x purple"></i>
              &nbsp; tweets
            </span>
            <h4 class="bigger pull-right">941</h4>
          </div>

          <div class="grid3">
            <span class="grey">
              <i class="ace-icon fa fa-pinterest-square fa-2x red"></i>
              &nbsp; pins
            </span>
            <h4 class="bigger pull-right">1,050</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endcan
@stop

@push('page-script')

<script type="text/javascript">
  jQuery(function($) {
    $('.easy-pie-chart.percentage').each(function(){
      var $box = $(this).closest('.infobox');
      var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
      var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
      var size = parseInt($(this).data('size')) || 50;
      $(this).easyPieChart({
        barColor: barColor,
        trackColor: trackColor,
        scaleColor: false,
        lineCap: 'butt',
        lineWidth: parseInt(size/10),
        animate: ace.vars['old_ie'] ? false : 1000,
        size: size
      });
    })

    $('.sparkline').each(function(){
      var $box = $(this).closest('.infobox');
      var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
      $(this).sparkline('html',
               {
                tagValuesAttribute:'data-values',
                type: 'bar',
                barColor: barColor ,
                chartRangeMin:$(this).data('min') || 0
               });
    });


    //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
    //but sometimes it brings up errors with normal resize event handlers
    $.resize.throttleWindow = false;

    var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
    var data = [
    { label: "Teste",  data: 38.7, color: "#68BC31"},
    { label: "search engines",  data: 24.5, color: "#2091CF"},
    { label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
    { label: "direct traffic",  data: 18.6, color: "#DA5430"},
    { label: "other",  data: 10, color: "#FEE074"}
    ]
    function drawPieChart(placeholder, data, position) {
      $.plot(placeholder, data, {
      series: {
        pie: {
          show: true,
          tilt:0.8,
          highlight: {
            opacity: 0.25
          },
          stroke: {
            color: '#fff',
            width: 2
          },
          startAngle: 2
        }
      },
      legend: {
        show: true,
        position: position || "ne",
        labelBoxBorderColor: null,
        margin:[-30,15]
      }
      ,
      grid: {
        hoverable: true,
        clickable: true
      }
     })
   }
   drawPieChart(placeholder, data);

   /**
   we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
   so that's not needed actually.
   */
   placeholder.data('chart', data);
   placeholder.data('draw', drawPieChart);


    //pie chart tooltip example
    var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
    var previousPoint = null;

    placeholder.on('plothover', function (event, pos, item) {
    if(item) {
      if (previousPoint != item.seriesIndex) {
        previousPoint = item.seriesIndex;
        var tip = item.series['label'] + " : " + item.series['percent']+'%';
        $tooltip.show().children(0).text(tip);
      }
      $tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
    } else {
      $tooltip.hide();
      previousPoint = null;
    }

   });

    /////////////////////////////////////
    $(document).one('ajaxloadstart.page', function(e) {
      $tooltip.remove();
    });




    var d1 = [];
    for (var i = 0; i < Math.PI * 2; i += 0.5) {
      d1.push([i, Math.sin(i)]);
    }

    var d2 = [];
    for (var i = 0; i < Math.PI * 2; i += 0.5) {
      d2.push([i, Math.cos(i)]);
    }

    var d3 = [];
    for (var i = 0; i < Math.PI * 2; i += 0.2) {
      d3.push([i, Math.tan(i)]);
    }


    var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
    $.plot("#sales-charts", [
      { label: "Domains", data: d1 },
      { label: "Hosting", data: d2 },
      { label: "Services", data: d3 }
    ], {
      hoverable: true,
      shadowSize: 0,
      series: {
        lines: { show: true },
        points: { show: true }
      },
      xaxis: {
        tickLength: 0
      },
      yaxis: {
        ticks: 10,
        min: -2,
        max: 2,
        tickDecimals: 3
      },
      grid: {
        backgroundColor: { colors: [ "#fff", "#fff" ] },
        borderWidth: 1,
        borderColor:'#555'
      }
    });


    $('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
    function tooltip_placement(context, source) {
      var $source = $(source);
      var $parent = $source.closest('.tab-content')
      var off1 = $parent.offset();
      var w1 = $parent.width();

      var off2 = $source.offset();
      //var w2 = $source.width();

      if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
      return 'left';
    }


    $('.dialogs,.comments').ace_scroll({
      size: 300
      });


    //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
    //so disable dragging when clicking on label
    var agent = navigator.userAgent.toLowerCase();
    if(ace.vars['touch'] && ace.vars['android']) {
      $('#tasks').on('touchstart', function(e){
      var li = $(e.target).closest('#tasks li');
      if(li.length == 0)return;
      var label = li.find('label.inline').get(0);
      if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
      });
    }

    $('#tasks').sortable({
      opacity:0.8,
      revert:true,
      forceHelperSize:true,
      placeholder: 'draggable-placeholder',
      forcePlaceholderSize:true,
      tolerance:'pointer',
      stop: function( event, ui ) {
        //just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
        $(ui.item).css('z-index', 'auto');
      }
      }
    );
    $('#tasks').disableSelection();
    $('#tasks input:checkbox').removeAttr('checked').on('click', function(){
      if(this.checked) $(this).closest('li').addClass('selected');
      else $(this).closest('li').removeClass('selected');
    });


    //show the dropdowns on top or bottom depending on window height and menu position
    $('#task-tab .dropdown-hover').on('mouseenter', function(e) {
      var offset = $(this).offset();

      var $w = $(window)
      if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
        $(this).addClass('dropup');
      else $(this).removeClass('dropup');
    });

  })
</script>

@endpush
