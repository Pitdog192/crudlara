<div class="row bg-dark">
    <div class="col">
        <input type="text" class="form-control" placeholder="Procesador" value="{{ isset($maquina->procesador)?$maquina->procesador:'' }}" name="procesador">
    </div>
    <div class="col">
        <input type="text" class="form-control" placeholder="RAM" value="{{ isset($maquina->ram)?$maquina->ram:'' }}" name="ram">
    </div>
    <div class="col">
        <input type="text" class="form-control" placeholder="Windows" value="{{ isset($maquina->windows)?$maquina->windows:'' }}" name="windows">
    </div>
</div>
<div class="row bg-dark">
    <div class="col">
        <input type="text" class="form-control" placeholder="Área" value="{{ isset($maquina->area)?$maquina->area:'' }}" name="area">
    </div> 
    <div class="col">
        <input type="text" class="form-control" placeholder="Sector" value="{{ isset($maquina->sector)?$maquina->sector:'' }}" name="sector">
    </div>
</div>
<div class="row bg-dark">
    <div class="col">
        <input type="text" class="form-control" placeholder="Usuario" value="{{ isset($maquina->usuario)?$maquina->usuario:'' }}" name="usuario">
    </div>
    <div class="col">
        <input type="text" class="form-control" placeholder="Inventario" value="{{ isset($maquina->inventario)?$maquina->inventario:'' }}" name="inventario">
    </div>
</div>
<button class="btn btn-primary" type="submit">Cargar datos</button>
<a href="{{ url('/maquina') }}" class="btn btn-danger" role="button">Cancelar</a>