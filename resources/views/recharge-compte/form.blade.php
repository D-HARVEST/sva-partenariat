<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="libelle" class="form-label">{{ __('Libelle') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="Libelle" class="form-control @error('Libelle') is-invalid @enderror rounded-05" value="{{ old('Libelle', $rechargeCompte?->Libelle) }}" id="libelle" >
            {!! $errors->first('Libelle', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-success rounded-1">Enregistrer</button>
    </div>
</div>
