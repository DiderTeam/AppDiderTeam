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
        
                            <label for="date">Selecione el dia</label>
                            <input type="date" id="date" />
                          </p>
                      
                          <p>
                            <fieldset class="form-group">
                                <div class="row">
                                  <legend class="col-form-label col-sm-2 pt-0">Bloques de horario</legend>
                                  <div class="col-sm-10">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                      <label class="form-check-label" for="gridRadios1">
                                        First radio
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                      <label class="form-check-label" for="gridRadios2">
                                        Second radio
                                      </label>
                                    </div>
                                    <div class="form-check disabled">
                                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                      <label class="form-check-label" for="gridRadios3">
                                        Third disabled radio
                                      </label>
                                    </div>
                                  </div>
                                </div>
                              </fieldset>
                          </p>
                      
                          <p>
                            <button type="submit">Reservar</button>
                        
                          </p>
                      
                        </fieldset>
                        
                        </fieldset>                        
                      </form>                    
                </div>
            </div>               
        </div>
    </div>
</div>

  <script>
  $(document).ready(function(){ 
      $('#complejoDeportivo').on('change',function(){
        var idComplejoDeportivo = $(this).val();
        console.log(idComplejoDeportivo);
        if(idComplejoDeportivo) {
        $.ajax({
            url:"json-canchas/"+idComplejoDeportivo,
            type:"get",
            data : {"_token":"{{ csrf_token() }}"},
            dataType:"json",
            success:function(data) {
              if(data){
                console.log(data);
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
@endsection