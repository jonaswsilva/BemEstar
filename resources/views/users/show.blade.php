
@extends('layout/layout')

@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h3 class="header smaller lighter blue">Dados do usuário</h3>
    </div>


    <div class="pull-right">

      <div class="btn-toolbar inline middle no-margin">
        <div data-toggle="buttons" class="btn-group no-margin">


        </div>
      </div>
    </div>
  </div>
</div>
<div>
  <div id="user-profile-1" class="user-profile row">
    <div class="col-xs-12 col-sm-3 center">
      <div>
        <span class="profile-picture">
          <img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="/assets/images/avatars/{{ $user->avatar }}" />
        </span>

        <div class="space-4"></div>

        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
          <div class="inline position-relative">
            <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
              <span class="white">{{ $user->name }}</span>
            </a>

          </div>
        </div>
      </div>

        <div class="hr hr12 dotted"></div>

        <div class="clearfix">
          <div class="grid2">
            <a class="btn btn-warning" href="{{ URL::to('users') }}"><i class="ace-icon fa fa-undo bigger-110"></i>Voltar</a>
          </div>

          <div class="grid2">
            <a class="btn btn-primary" href="{{ URL::to('users/'. $user->id .'/edit') }}"><i class="ace-icon fa fa-pencil bigger-110"></i>Editar</a>
          </div>
        </div>


      </div>

      <div class="col-xs-12 col-sm-9">


        <div class="space-12"></div>

        <div class="profile-user-info profile-user-info-striped">
          <div class="profile-info-row">
            <div class="profile-info-name"> Id </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $user->id }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Nome </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $user->name }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> E-mail </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $user->email }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Atribuição </div>

            <div class="profile-info-value">
              <span class="editable" id="username">
                @php
                  switch($user->role){
                      case 1:
                        echo "Secretária";
                        break;
                      case 2:
                        echo "Fisioterapeuta";
                        break;
                      case 3:
                        echo "Psicóloga";
                        break;
                      default:

                      }
                    @endphp
              </span>
            </div>
          </div>


        </div>

        <div class="space-20"></div>

        <div class="hr hr2 hr-double"></div>

      </div>
    </div>
  </div>


@endsection

@push('page-script')


<script src="{{ asset('assets/js/bootstrap-editable.min.js') }}"></script>
<script src="{{ asset('assets/js/ace-editable.min.js') }}"></script>

<script type="text/javascript">

jQuery(function($) {

  //editables on first profile page
  $.fn.editable.defaults.mode = 'inline';
  $.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
    $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
                                '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';



                                // *** editable avatar *** //
                        				try {//ie8 throws some harmless exceptions, so let's catch'em

                        					//first let's add a fake appendChild method for Image element for browsers that have a problem with this
                        					//because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
                        					try {
                        						document.createElement('IMG').appendChild(document.createElement('B'));
                        					} catch(e) {
                        						Image.prototype.appendChild = function(el){}
                        					}

                        					var last_gritter
                        					$('#avatar').editable({
                        						type: 'image',
                        						name: 'avatar',
                        						value: null,
                        						//onblur: 'ignore',  //don't reset or hide editable onblur?!
                        						image: {
                        							//specify ace file input plugin's options here
                        							btn_choose: 'Mudar Avatar',
                        							droppable: true,
                        							maxSize: 110000,//~100Kb

                        							//and a few extra ones here
                        							name: 'avatar',//put the field name here as well, will be used inside the custom plugin
                        							on_error : function(error_type) {//on_error function will be called when the selected file has a problem
                        								if(last_gritter) $.gritter.remove(last_gritter);
                        								if(error_type == 1) {//file format error
                        									last_gritter = $.gritter.add({
                        										title: 'File is not an image!',
                        										text: 'Please choose a jpg|gif|png image!',
                        										class_name: 'gritter-error gritter-center'
                        									});
                        								} else if(error_type == 2) {//file size rror
                        									last_gritter = $.gritter.add({
                        										title: 'File too big!',
                        										text: 'Image size should not exceed 100Kb!',
                        										class_name: 'gritter-error gritter-center'
                        									});
                        								}
                        								else {//other error
                        								}
                        							},
                        							on_success : function() {
                        								$.gritter.removeAll();
                        							}
                        						},
                        					    url: function(params) {
                        							// ***UPDATE AVATAR HERE*** //
                        							//for a working upload example you can replace the contents of this function with
                        							//examples/profile-avatar-update.js

                        							var deferred = new $.Deferred

                        							var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
                        							if(!value || value.length == 0) {
                        								deferred.resolve();
                        								return deferred.promise();
                        							}


                        							//dummy upload
                        							setTimeout(function(){
                        								if("FileReader" in window) {
                        									//for browsers that have a thumbnail of selected image
                        									var thumb = $('#avatar').next().find('img').data('thumb');
                        									if(thumb) $('#avatar').get(0).src = thumb;
                        								}

                        								deferred.resolve({'status':'OK'});

                        								if(last_gritter) $.gritter.remove(last_gritter);
                        								last_gritter = $.gritter.add({
                        									title: 'Avatar Updated!',
                        									text: 'Uploading to server can be easily implemented. A working example is included with the template.',
                        									class_name: 'gritter-info gritter-center'
                        								});

                        							 } , parseInt(Math.random() * 800 + 800))

                        							return deferred.promise();

                        							// ***END OF UPDATE AVATAR HERE*** //
                        						},

                        						success: function(response, newValue) {
                        						}
                        					})
                        				}catch(e) {}


})


</script>

@endpush
