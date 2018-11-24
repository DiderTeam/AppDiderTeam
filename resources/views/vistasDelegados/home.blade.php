@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
                          <select class="form-control">
                          <option value="">--Seleccione un complejo deportivo--</option>
                          <a href="{{ action('PageController@logout') }}"></a>
                            @foreach($complejosDeportivos as $complejoDeportivo)
                              <option value="{{ $complejoDeportivo ['id'] }}">{{ $complejoDeportivo ['nombre'] }}</option>
                            @endforeach
                          </select>
                        </div>
                        
                        
                        </div>
                                <div class="col-md-4">
                                    <select name="state" class="form-control">
                                     <option>--State--</option>

                                 </select>
                             </div><div class="col-md-2"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>

                         </div>
                     </form>
                 </div>

                 <div class="panel-footer">- By: [Your Name]</div>

 

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
            

        </div>
    </div>
</div>
@endsection
