@extends('layouts.app')
@include('elements.navAdmin')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form method="post" action="{{action('SecretaryController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <h2>Stai modificando {{ $teacher->name }} {{ $teacher->surname }}</h2>
      <div class="row form-group">
      <div class = "col-md-12">
        <!-- <label for="addCourse"></label><br> -->
        <label for="course">A quali corsi insegna {{ $teacher->name }}?</label><br>
        <!--<input type="email" class="form-control" id = "addCourse"> -->
        <select name="courses">
          <option value="">--- Select Course ---</option>
          <?php
            $courses = \App\ClassModel::all();
            foreach ($courses as $key => $value) {
          ?>

          <option value="{{ $value->id }}"> {{ $value->year }} {{ $value->section }} {{ $value->course }} </option>
        <?php } ?>
        </select>
      </div>
      </div>


      <div class="row form-group">
      <div class = "col-md-12">
        <label for="subject">Quali materie insegna {{ $teacher->name }}?</label><br>
        <select name="subject">

          <option>Materie</option>

    </select>
    </div><div class="col-md-2"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>
        <!-- <input type="text" class="form-control" id="addSubject"> -->
      </div>

      </div>

      <div class="row form-group">
      <div class = "col-md-12">
        <button type="submit" class="btn btn-primary" id="registerButton">
          {{ __('SALVA') }}
        </button>
      </div>
      </div>
      </form>
      </div>

    </div>
  </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function ()
    {
            jQuery('select[name="courses"]').on('change',function(){
               var courseID = jQuery(this).val();
               if(courseID)
               {
                  jQuery.ajax({
                     url : '/subjects/get/' +courseID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="subject"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="subject"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="subject"]').empty();
               }
            });
    });
    </script>
@endsection
