@if ($message = Session::get('success'))
    <div class="row">
        <div class="col">
            <div class="alert alert-success border-0" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
                </button>
                <strong>Well done!</strong> {!!  $message !!}
            </div>
        </div>
    </div>

@endif
@if ($error = Session::get('error'))
    <div class="row">
        <div class="col">
            <div class="alert alert-warning border-0" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
                </button>
                <strong>Sorry!</strong> {!!  $error !!}
            </div>
        </div>
    </div>

@endif
