@extends('layouts.dashboard')
@section('page_title', $page_title)
@section('innerStyleSheet')
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/dropify/css/dropify.min.css') }}">
    <link href="{{ asset('dashboard/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @include('includes.dashboard-breadcrumbs')

@section('body')
    <div class="page-content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body profile-nav">
                            <div class="nav flex-column nav-pills" id="profile-tab" aria-orientation="vertical">
                                <a class="nav-link active" id="profile-dash-tab" data-toggle="pill" href="#profile-dash"
                                    aria-selected="true">Details</a>
                                <a class="nav-link" id="profile-activities-tab" data-toggle="pill"
                                    href="#profile-activities" aria-selected="false">Attendance</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content" id="profile-tabContent">
                                <div class="tab-pane fade show active" id="profile-dash">
                                    @include('includes.messages')
                                    <h4 class="header-title mt-0">Profile Details</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    {!! Form::open(['route' => ['dashboard.accounts.user.update.profile'], 'method' => 'POST', 'files' => true, 'class' => 'solid-validation']) !!}
                                                    {!! Form::file('avatar', ['class' => 'form-control dropify', 'id' => 'avatar','data-default-file'=>empty($user->avatar) ? asset('dashboard/images/users/demo-user.jpg') : asset($user->avatar)
                                                    ,'data-max-file-size'=>'3M','data-allowed-file-extensions'=>'jpeg jpg png bmp gif', 'data-height' => '240']) !!}
                                                    <div class="fro_profile_user-detail">
                                                        <h5 class="fro_user-name">{{ ucwords($user->name) }}</h5>
                                                        <p class="mb-0 fro_user-name-post">{{ ucwords($user->roles[0]->name) }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9  mb-lg-0">
                                                    <div class="form-group">
                                                        {!! Html::decode(Form::label('password', 'Change Password <small>(Minimum 4 characters)</small>')) !!}
                                                        {!! Form::password('password', ['class' => 'form-control', 'id' => 'password','min'=> 4]) !!}
                                                        @error('password')
                                                            <span class="invalid-feedback d-block"
                                                                role="alert"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-9"></div>
                                                <div class="col-md-2 ml-3">
                                                    @include('dashboard.accounts.common.buttons.buttons-crud', ['update' => true])
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="profile-activities">
                                    <h4 class="mt-0 header-title mb-3">Attendance</h4>
                                    <div class="activity">

                                    </div>

                                    <div class="activity-meeting">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@endsection
@section('innerScriptFiles')
    <script src="{{ asset('dashboard/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/select2/select2.min.js') }}"></script>
@endsection
@section('innerScript')
<script>
    (function() {
        $('.dropify').dropify();
        $('.select2').select2();
    })();
</script>
@endsection
