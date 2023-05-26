@if (session('status'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session('danger'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        {{ session('danger') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session('warning'))
    <div class="alert alert-warning alert-dismissible" role="alert">
        {{ session('warning') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session('info'))
    <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {{ session('info') }}
    </div>
@elseif(session('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {{ session('success') }}
    </div>
@endif

{{-- @forelse(['danger', 'warning', 'success', 'info'] as $msg)
    @if (Session::has($msg))
        <div class="col-md-12">
            <div class="alert bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-700 inline-flex items-center w-full alert-dismissible-{{ $msg }} fade show"
                role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{-- <button type="button" class="close" data-dismiss="alert">&times;</button> --}
                <p class="mb-0">{{ Session::get($msg) }}</p>
            </div>
        </div>
    @endif
@empty
@endforelse --}}
