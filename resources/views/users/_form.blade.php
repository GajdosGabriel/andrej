<form method="POST" action="{{ route('user.store') }}">
    @csrf @method('POST')

    <div class="row mb-3">
        <label for="first_name" class="col-md-4 col-form-label text-md-end">Meno</label>

        <div class="col-md-6">
            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror"
                name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

            @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="last_name" class="col-md-4 col-form-label text-md-end">Priezvisko</label>

        <div class="col-md-6">
            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror"
                name="last_name" value="{{ old('first_name') }}" required autocomplete="last_name">

            @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="address" class="col-md-4 col-form-label text-md-end">Adresa</label>

        <div class="col-md-6">
            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                name="address" value="{{ old('first_name') }}">

            @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="phone" class="col-md-4 col-form-label text-md-end">Tel.</label>

        <div class="col-md-6">
            <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror"
                name="phone" value="{{ old('first_name') }}">

            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="date" class="col-md-4 col-form-label text-md-end">Dátum</label>

        <div class="col-md-6">
            <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date"
                value="{{ old('date') }}" required>

            @error('date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Uložiť
            </button>
        </div>
    </div>
</form>
