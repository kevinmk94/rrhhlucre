
<div class="card card-custom">
    <!--begin::Card-->
        <div class="card card-custom example example-compact">
            <div class="card-header">
                <h3 class="card-title">Creación de nuevo TRABAJADORES   </h3>
            </div>
            <!--begin::Form-->
            <form class="form" method="POST" action="{{ url('') }}/admin/trabajadores" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h3 class="font-size-lg text-dark font-weight-bold mb-6">1. TRABAJADORES:</h3>
                    <div class="mb-15">
                        {{--    --}}
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-right">TRABAJADORES:</label>
                            <div class="col-lg-6">
                                <input type="text" name="dni" class="form-control" placeholder="Ingresa el nombres" value="{{ old('dni') }}" required />
                                <input type="text" name="nombres" class="form-control" placeholder="Ingresa el nombres" value="{{ old('nombres') }}" required />

                                <input type="text" name="apellido_p" class="form-control" placeholder="Ingresa el apellido_p" value="{{ old('apellido_p') }}" required />

                                <input type="text" name="apellido_m" class="form-control" placeholder="Ingresa el apellido_m" value="{{ old('apellido_m') }}" required />
                               
                                <select class="form-control" name="cargos_id" id="cargos_id" required>
                                    @foreach ($cargos as $cargo)
                                    <option value="{{ $cargo->id }}">{{ $cargo->id }}</option>
                                    @endforeach
                                </select>
                                @error('regimene')
                                    <div class="custom-invalid-feedback">{{ $message }}</div>
                                @enderror
                                <select class="form-control" name="regimenes_id" id="regimenes_id" required>
                                    @foreach ($regimenes as $regimene)
                                    <option value="{{ $regimene->id }}">{{ $regimene->id }}</option>
                                    @endforeach
                                </select>
                                @error('cargo')
                                    <div class="custom-invalid-feedback">{{ $message }}</div>
                                @enderror
                              

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