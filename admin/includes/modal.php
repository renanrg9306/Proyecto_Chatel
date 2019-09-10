<container>
<div id="Updatepicture" class="modal fade" role="dialog" id='modal2'>
  <div class="modal-dialog modal-dialog-left modal-md" style="float:right;width:20%" id='modal2'>
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;" id='modal2'>
      <div class="modal-header" style="background-color:#0a2048;">
        <center>
        <h4 class="modal-title" style="color:white;" >Cambiar imagen de perfil</h4>
     </center>
      </div>
       <div style="margin-left: : 10px; margin-right: 10px;">
           <form id="formulario" action="recibir_foto.php" class="form-group" method="post" enctype="multipart/form-data">
            <div class="modal-body" id="modal2">

          <div class="form-group"> <label for="carrera" class="col-md-1 control-label"><b>Foto:</b></label>
                        
                    <input type="file" name="foto" id="foto" required="true" class="form-control">
                       
                    </div> 
              <div style="margin-top: 10px"> 
              <center><input type="submit" value="Cambiar Foto"  class="btn btn-success" />
              <button type="button" class="btn btn-success" data-dismiss="modal"><b>Cerrar</b></button>
              </center> 
               </div>         
             </div>          
        </form>
      </div>
      
      </div> <!-- fin modal cont-->
       
  </div> <!-- fin modal body-->
  </div><!-- fin 1-->
  </container>