@extends('layout')
@section('title','estoy en reservas')
@section('contenido')
<form class="bd-example">
        <br>
        <fieldset>
          <br>
          <legend>Estoy en Login de reservas de canchas</legend>
      
          <p>
            <label for="input">Example input</label>
            <input type="text" id="input" placeholder="Example input" />
          </p>
      
          <p>
            <label for="select">Selecione una cancha</label>
            <select id="select">
              <option value="">Selecione</option>
                <option value="">Gimnacio CC </option>
                <option value="">Estadio Español</option>
                <option value="">Otra cancha</option>
            </select>
          </p>
      
          <p>
            <label for="date">Selecione el dia</label>
            <input type="date" id="date" />
          </p>
      
          <p>
            <label for="time">Selecione el horario</label>
            <input type="time" id="time" />
          </p>
      
          <p>
            <button type="submit">Button submit</button>
            <input type="submit" value="Input submit button" />
            <input type="button" value="Input button" />
          </p>
      
        </fieldset>
      </form>


@endsection
 
