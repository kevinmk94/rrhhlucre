
<div class="card card-custom">
    <!--begin::Card-->
        <div class="card card-custom example example-compact">
            <div class="card-header">
                <h3 class="card-title">Creación de nuevo REGIMENES   </h3>
            </div>
            <!--begin::Form-->
            <form class="form" method="POST" action="{{ url('') }}/admin/regimenes" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h3 class="font-size-lg text-dark font-weight-bold mb-6">1. REGIMENES:</h3>
                    <div class="mb-15">
                        {{--    --}}
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-right">REGIMENES:</label>
                            <div class="col-lg-6">
                                <input type="text" name="nombre_regimen" class="form-control" placeholder="Ingresa el nombres" value="{{ old('cargos') }}" required />
                                {{-- @error('rfc')
                                    <div class="custom-invalid-feedback">{{ $message }}</div>
                                @enderror --}}
                            </div>
                        </div>


                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-success mr-2">Guardar</button>
                            <button type="reset" class="btn btn-secondary">Cancelar</button>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
    <!--end::Card-->
</div>