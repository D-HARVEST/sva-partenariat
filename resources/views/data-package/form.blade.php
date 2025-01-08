<div class="">
    <div class="row">

        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="reference_a_p_i" class="form-label">{{ __('Referenceapi') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="referenceAPI" class="form-control @error('referenceAPI') is-invalid @enderror rounded-05" value="{{ old('referenceAPI', $dataPackage?->referenceAPI) }}" id="reference_a_p_i" >
            {!! $errors->first('referenceAPI', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="volume" class="form-label">{{ __('Volume') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="number" name="Volume" pattern="[0-9]" class="form-control @error('Volume') is-invalid @enderror rounded-05" value="{{ old('Volume', $dataPackage?->Volume) }}" id="volume" >
            {!! $errors->first('Volume', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="cout" class="form-label">{{ __('Cout') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="number" name="Cout"  pattern="[0-9]" class="form-control @error('Cout') is-invalid @enderror rounded-05" value="{{ old('Cout', $dataPackage?->Cout) }}" id="cout" >
            {!! $errors->first('Cout', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="prix" class="form-label">{{ __('Prix') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="number" name="Prix"  pattern="[0-9]" class="form-control @error('Prix') is-invalid @enderror rounded-05" value="{{ old('Prix', $dataPackage?->Prix) }}" id="prix" >
            {!! $errors->first('Prix', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="ancien_prix" class="form-label">{{ __('Ancienprix') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="number" name="AncienPrix"  pattern="[0-9]" class="form-control @error('AncienPrix') is-invalid @enderror rounded-05" value="{{ old('AncienPrix', $dataPackage?->AncienPrix) }}" id="ancien_prix" >
            {!! $errors->first('AncienPrix', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="validite" class="form-label">{{ __('Validite') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="number" name="Validite"  pattern="[0-9]" class="form-control @error('Validite') is-invalid @enderror rounded-05" value="{{ old('Validite', $dataPackage?->Validite) }}" id="validite" >
            {!! $errors->first('Validite', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong>
                <label for="recharge_stock_id" class="form-label">{{ __('Sélectionner un stock') }}</label>
            </strong>
            <select name="recharge_stock_id"
                    class="form-control @error('recharge_stock_id') is-invalid @enderror rounded-05"
                    id="recharge_stock_id" required>
                <option value="" disabled {{ old('recharge_stock_id', $dataPackage?->recharge_stock_id) ? '' : 'selected' }}>
                    -- Sélectionner --
                </option>
                @foreach($rechargeStock as $stock)
                    <option value="{{ $stock->id }}"
                            {{ old('recharge_stock_id', $dataPackage?->recharge_stock_id) == $stock->id ? 'selected' : '' }}>
                        {{ $stock->Volume ?? $stock->id }} <!-- Utilisez un nom clair ou une colonne alternative -->
                    </option>
                @endforeach
            </select>
            @error('recharge_stock_id')
                <div class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>



    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-success rounded-1">Enregistrer</button>
    </div>
</div>
