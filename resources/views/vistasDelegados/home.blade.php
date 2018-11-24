@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
            
                <div class="card-header">Sistema de reservas de canchas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif          
                    <form class="bd-example">
                        
                    <fieldset> 
                      <label for="select">Selecione una complejo deportivo</label>
                       <div class="form-group">
                         <select name="complejoDeportivo" id="complejoDeportivo" class="form-control input-lg dynamic" data-dependent="cancha">
                            @foreach($complejosDeportivos as $complejoDeportivo)
                              <option value="{{ $complejoDeportivo ['id'] }}">{{ $complejoDeportivo ['nombre'] }}</option>
                            @endforeach
                          </select>
                        </div>
                        <br />                        
                        <div class="form-group">
                          <select name="cancha" id="cancha" class="form-control input-lg dynamic">
                            <option value="">Selecione una cancha</option>
                          </select>
                        </div>
                        <br />
                        </div>
                          {{ csrf_field() }}
                        <br />
                        <br />
                        
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
                        
                      </form>                    
                </div>
            </div>            
            <script type="text/javascript">
              $('#complejoDeportivo').on('change', function(e){
                console.log(e);
                var province_id = e.target.value;
                $.get('/json-canchas?idComplejoDeportivo=' + idComplejoDeportivo,function(data) {
                  console.log(data);
                  $('#canchas').empty();
                  $('#canchas').append('<option value="0" disable="true" selected="true">=== Select canchas ===</option>');
                  $.each(data, function(index, regenciesObj){
                    $('#regencies').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.name +'</option>');
                  })
                });
              });

        </div>
    </div>
</div>
@endsection
