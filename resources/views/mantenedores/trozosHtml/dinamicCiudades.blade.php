<label for="city_id">Ciudad</label>
    <select class="form-control" name="city_id" id="city_id">
        <option selected disabled>Seleccione una ciudad</option>
        @foreach($ciudades as $ciudad)
            <option value='{{ $ciudad->id }}'>{{ $ciudad->name }}</option>
        @endforeach
    </select>



