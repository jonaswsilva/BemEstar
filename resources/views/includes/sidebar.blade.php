<div class="main-container ace-save-state" id="main-container">
  <script type="text/javascript">
  try{ace.settings.loadState('main-container')}catch(e){}
  </script>

  <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
    <script type="text/javascript">
      try{ace.settings.loadState('sidebar')}catch(e){}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
      <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
        <button class="btn btn-success">
          <i class="ace-icon fa fa-signal"></i>
        </button>

        <button class="btn btn-info">
          <i class="ace-icon fa fa-pencil"></i>
        </button>

        <button class="btn btn-warning">
          <i class="ace-icon fa fa-users"></i>
        </button>

        <button class="btn btn-danger">
          <i class="ace-icon fa fa-cogs"></i>
        </button>
      </div>

      <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
        <span class="btn btn-success"></span>

        <span class="btn btn-info"></span>

        <span class="btn btn-warning"></span>

        <span class="btn btn-danger"></span>
      </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
      <li {{{ (Request::is('/') ? 'class=active' : '') }}}>
        <a href="{{ URL::to('/') }}">
          <i class="menu-icon fa fa-heartbeat"></i>
          <span class="menu-text"> Bem Estar </span>
        </a>

        <b class="arrow"></b>
      </li>



      <li class="{{ $menu_open or '' }}">
        <a href="#" class="dropdown-toggle">
          <i class="menu-icon fa fa-users"></i>
          <span class="menu-text">
            Cadastros
          </span>

          <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">


          <li class="{{ $nav_pat or ''}}">
            <a href="{{ URL::to('patients') }}">
              <i class="menu-icon fa fa-caret-right"></i>
              Pacientes
            </a>

            <b class="arrow"></b>
          </li>

          <li class="{{ $nav_prof or '' }}">
            <a href="{{ URL::to('professionals') }}">
              <i class="menu-icon fa fa-caret-right"></i>
              Profissionais
            </a>

            <b class="arrow"></b>
          </li>

        </ul>
      </li>

      <li class="{{ $nav_sch or '' }}">
        <a href="{{ URL::to('schedules') }}">
          <i class="menu-icon fa fa-calendar"></i>

          <span class="menu-text">
            Agendamento
          </span>
        </a>

        <b class="arrow"></b>
      </li>
      @can('admin-access')
      <li class="">
        <a href="#" class="dropdown-toggle">
          <i class="menu-icon fa fa-list"></i>
          <span class="menu-text"> Relatórios </span>

          <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
          <li class="">
            <a href="tables.html">
              <i class="menu-icon fa fa-caret-right"></i>
              Simple &amp; Dynamic
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="jqgrid.html">
              <i class="menu-icon fa fa-caret-right"></i>
              jqGrid plugin
            </a>

            <b class="arrow"></b>
          </li>
        </ul>
      </li>

      <li class="{{ $menuc_open or '' }}">
        <a href="#" class="dropdown-toggle">
          <i class="menu-icon fa fa-pencil-square-o"></i>
          <span class="menu-text"> Consulta </span>

          <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
          <li class="{{ $nav_con or '' }}">
            <a href="{{ URL::to('medicalappointments') }}">
              <i class="menu-icon fa fa-caret-right"></i>
              Prescrição
            </a>

            <b class="arrow"></b>
          </li>

          <li class="{{ $nav_proc or '' }}">
            <a href="{{ URL::to('procedures') }}">
              <i class="menu-icon fa fa-caret-right"></i>
              Procedimentos
            </a>

            <b class="arrow"></b>
          </li>


        </ul>
      </li>
      @endcan
      <li class="{{ $nav_contr or '' }}">
        <a href="{{ URL::to('contract') }}">
          <i class="menu-icon fa fa-list-alt"></i>
          <span class="menu-text"> Contrato </span>
        </a>

        <b class="arrow"></b>
      </li>


      @can('admin-access')
      <li class="{{ $nav_session or '' }}">
        <a href="{{ URL::to('medicalrecords') }}">
          <i class="menu-icon fa fa-file-o"></i>
          <span class="menu-text"> Sessões </span>
        </a>

        <b class="arrow"></b>
      </li>
      @endcan
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
      <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
  </div>
