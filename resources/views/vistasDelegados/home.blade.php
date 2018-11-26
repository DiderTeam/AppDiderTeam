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
                        </fieldset>                        
                      </form>                    
                </div>
            </div>               
        </div>
    </div>
</div>

  <script type="text/javascript">
          $('complejoDeportivo').change(function(e){
            console.log(e);
            var idComplejoDeportivo = e.target.value;
            $.get('/home/json-canchas?idComplejoDeportivo=' + idComplejoDeportivo,function(data) {
              console.log(data);
              $('canchas').empty();
              $('canchas').append('<option value="0" disable="true" selected="true">=== Canchas ===</option>');
              
              $.each(data, function(index, canchasObj){
                $('canchas').append('<option value="'+ canchasObj.id +'">'+ canchasObj.name +'</option>');
              })
            });
          });
        </script>
@endsection