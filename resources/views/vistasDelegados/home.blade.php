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
                      <legend class="col-form-label col-sm-2 pt-0">Bloques de horario</legend>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios" value="option1" checked>
                        </div>                        
                      </div>
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
          var idComplejoDeportivo = $(this).val();
          if(idComplejoDeportivo) {
          $.ajax({
              url:"json-canchas/"+idComplejoDeportivo,
              type:"get",
              data : {"_token":"{{ csrf_token() }}"},
              dataType:"json",
              success:function(data){
                if(data){
                  $('#canchas').empty();
                  $('#canchas').append('<option value="0" disable="true" selected="true">=== Canchas ===</option>');
                  $.each(data, function(key, value){
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
        console.log(fechaSolicitada);
        if(fechaSolicitada){
          $.ajax({
                url:"json-bloquesHorarios/"+fechaSolicitada,
                type:"get",
                data : {"_token":"{{ csrf_token() }}"},
                dataType:"json",
                success:function(data){
                  console.log(data);
                  if(data){
                    var i=1;      
                    $.each(data, function(value){
                      $('#gridRadios'+i+'').append('<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios'+i+'" value="'+value.horarioInicio+' : '+value.horarioFinal+'" checked>');
                      i++;
                    });                                                    
                  }
                }
          });
        }        
      });
    });
  </script>
  
@endsection