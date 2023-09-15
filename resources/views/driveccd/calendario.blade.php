
<x-app-layout>

@extends('layouts.calendar')


 <div class="conteiner">
   <br>
   <br>
   <br>
   <h1 class="text-center text-primary"><u>Calendario Agenta del CCD</u></h1>
   <br>
   <br>
     <div id="calendar">
       
     </div>
 </div>
 <!-- Button trigger modal -->
 
 
 <!-- Modal -->
 <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">Agregar Evento</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
             </div>
             <div class="modal-body">
                 <form action="">
                     <div class="form-group">
                       <label for="title">Titulo</label>
                       <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
                      
                     </div>
                     <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="">
               
                      </div>
                      <div class="form-group">
                        <label for="start">Inicio</label>
                        <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
                       
                      </div>
                      <div class="form-group">
                        <label for="end">Final</label>
                        <input type="date" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
                    
                      </div>
                 </form>
             </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                <button type="button" class="btn btn-Warning" id="btnModificar">Modificar</button>
                 <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                
             </div>
         </div>
     </div>
 </div>
 
    
</x-app-layout>
 <!-- Button trigger modal -->
 

