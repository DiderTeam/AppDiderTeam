@extends('layouts.app')
@section('content')
<div class="container">
      <div class="col-lg-4">                       
              <fieldset>
                  <div class="form-group">
                    <select class="form-control" name="complejoDeportivo" id="complejoDeportivo">
                      <option value="0" disable="true" selected="true">=== Complejos Deportivos ===</option>
                      @foreach($complejosDeportivos as $complejoDeportivo)
                        <option value="{{ $complejoDeportivo ['id'] }}">{{ $complejoDeportivo ['nombre'] }}</option>
                      @endforeach
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <select class="form-control" name="canchas" id="canchas">
                      <option value="0" disable="true" selected="true">=== Canchas ===</option>
                    </select>
                  </div>                                      
                                        
                  <div class="form-group">
                    <label for="date">Selecione el dia</label>
                    <input type="date" id="date"/>
                  </div> 
                  <button type="button" id="button">Aceptar</button>
                
                  <fieldset class="form-group">
                    <div class="row">                     
                    </div>
                  </fieldset>
                                    
                    <p>
                      <button type="submit">Reservar</button>                  
                    </p>                        
                </fieldset>                                    
                </div>
            </div>               
        </div>
    </div>
</div>

  <script>
    $(document).ready(function(){ 
        $('#complejoDeportivo').on('change',function(){
          var idComplejoDeportivo = $('#complejoDeportivo').val();
          if(idComplejoDeportivo) {
          $.ajax({
              url:"json-canchas/"+idComplejoDeportivo,
              type:"get",
              data : {"_token":"{{ csrf_token() }}"},
              dataType:"json",
              success:function(data){
                console.log(data);
                if(data){
                  $('#canchas').empty();
                  $('#canchas').append('<option value="0" disable="true" selected="true">=== Canchas ===</option>');
                  $.each(data, function(key, value){
                    console.log(value.id);
                    console.log(value.nombre);
                      $('#canchas').append('<option value="'+value.id+'">' + value.nombre + '</option>');
                  });
                }
              }
          });
        }
      });
    });
  </script>

  <script>
    $(document).ready(function(){ 
      document.querySelector("#date").valueAsDate = new Date();
    });
  </script>

  <script>
    $(document).ready(function(){ 
      $('#button').click(function(){
        var fechaSolicitada = $('#date').val();
        var idComplejoDeportivo = $('#complejoDeportivo').val();;
        if(fechaSolicitada){
          $.ajax({
                url:"json-bloquesHorarios/"+fechaSolicitada+"/"+idComplejoDeportivo,
                type:"get",
                data : {"_token":"{{ csrf_token() }}"},
                dataType:"json",
                success:function(data){
                  console.log(data);
                  if(data){
                    var formCheck= $(".row")
                    var i=1,c=0;
                    var reservados = data[0];
                    var bloques = data[1];
                    var idReservas = data[2];
                    var flag= true;   
                    $.each(bloques, function(keyBloques,valueBloques){
                      $.each(reservados, function(keyBloques,valueReservados){
                        console.log(valueReservados.bloqueInicio);
                        console.log(valueBloques.bloqueInicio);
                        console.log(valueReservados.bloqueFinal);
                        console.log(valueBloques.bloqueFinal);
                        if(flag==true && valueBloques.bloqueInicio != valueReservados.bloqueInicio && valueBloques.bloqueFinal != valueReservados.bloqueFinal){
                          $(formCheck).append('<div class="col-sm-10"><input type="radio" name="gridRadios" id="gridRadios'+i+'" value="0" checked>'+valueBloques.bloqueInicio+' : '+valueBloques.bloqueFinal+'</div>');
                          flag=false;
                        }
                      });
                      flag=true;                    
                    });                                                    
                  }
                }
          });
        }        
      });
    });
  </script>
  
@endsection