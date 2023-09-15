
@extends('adminlte::page')  
@extends('layouts.app')

<div class="container">
    <br />
    <h1 class="text-center text-primary"><u>CCD</u></h1>
    <br />

    <div id="calendar"></div>

</div>
   
<script>

$(document).ready(function () {

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    var calendar = $('#calendar').fullCalendar(){
    }

});
  
</script>
  
