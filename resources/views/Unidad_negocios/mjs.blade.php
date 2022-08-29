@error('UNI_NOMBRE')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong> {{ $message }} </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@enderror

@error('UNI_CODE')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong> {{ $message }} </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@enderror
