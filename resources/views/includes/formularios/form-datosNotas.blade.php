<div class="row">
    <div class="form-group col-md-12">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" class="form-control" id="titulo" value="{{old('titulo', $data->notas->titulo ?? '')}}" tabindex="2">
    </div>
    <div class="form-group col-md-12">
        <label for="notas">Notas</label>
        <textarea id="editor1" name="notas" rows="10" cols="80" tabindex="1">
            {{old('notas', $data->notas->notas ?? '')}}
        </textarea>
    </div>
</div>