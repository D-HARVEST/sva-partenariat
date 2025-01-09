<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="volume" class="form-label">{{ __('Volume') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="number" name="Volume" class="form-control @error('Volume') is-invalid @enderror rounded-05" value="{{ old('Volume', $rechargeStock?->Volume) }}" id="volume" >
            {!! $errors->first('Volume', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="observation" class="form-label">{{ __('Observation') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="Observation" class="form-control @error('Observation') is-invalid @enderror rounded-05" value="{{ old('Observation', $rechargeStock?->Observation) }}" id="observation" >
            {!! $errors->first('Observation', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="expire_at" class="form-label">{{ __('Expireat') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="date" name="ExpireAt" class="form-control @error('ExpireAt') is-invalid @enderror rounded-05" value="{{ old('ExpireAt', $rechargeStock?->ExpireAt) }}" id="expire_at" >
            {!! $errors->first('ExpireAt', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="type" class="form-label">{{ __('Type') }}</label> </strong>
            <select name="recharge_compte_id" class="form-control @error('id') is-invalid @enderror rounded-05" id="recharge_compte_id">
                <option value="">-- Sélectionner --</option>

                @foreach($rechargeCompte as $compte)
                    <option value="{{ $compte->id }}"
                            {{ old('recharge_compte_id', $rechargeStock?->recharge_compte_id) == $compte->id ? 'selected' : '' }}>
                        {{ $compte->Libelle ?? $compte->id }} <!-- Utilisez un nom clair ou une colonne alternative -->
                    </option>
                @endforeach
            </select>
            @error('recharge_compte_id')
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
