@extends('layouts.dashboard')
@section('page_title', $page_title)
@section('innerStyleSheet')
    <link href="{{ asset('dashboard/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <style>
        h4 {
            display: inline-block;
        }
        .all {
            display: inline-block;
        }
    </style>
@endsection
@section('content')

@include('includes.dashboard-breadcrumbs')

@section('body')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        {!! Form::open(['route' => ['dashboard.accounts.roles.store'], 'method' => 'POST', 'files' => true, 'class' => 'solid-validation'] ) !!}
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {!! Html::decode(Form::label('name' ,'Name <i class="text-danger">*</i>' ,['class'=>' col-form-label']))   !!}
                                    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'id' => 'name','placeholder'=>'Enter Unique Name in Lower Case', 'required']) !!}
                                    @error('name')
                                    <span class="invalid-feedback d-block"
                                          role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {!! Html::decode(Form::label('label' ,'Label <i class="text-danger">*</i>' ,['class'=>' col-form-label']))   !!}
                                    {!! Form::text('label', null, ['class' => 'form-control', 'required', 'id' => 'name','placeholder'=>'Enter Label In Camel Case', 'required']) !!}
                                    @error('label')
                                    <span class="invalid-feedback d-block"
                                          role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {!! Html::decode(Form::label('users' ,'Users' ,['class'=>' col-form-label']))   !!}
                                    {!! Form::select('users[]', $users, null, ['id' => 'users', 'class' => 'form-control select2',
                                    'style' => 'width:100%', 'multiple']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 bg-soft-primary text-center">
                                <h3 class="my-1">Permissions</h3>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12 text-center">
                                {!! Form::button('Toggle All', ['class' => 'btn btn-primary w-sm', 'id' => 'toggleAll']) !!}
                                {!! Form::button('Toggle View', ['class' => 'btn btn-primary w-sm', 'id' => 'toggleView']) !!}
                                {!! Form::button('Toggle Create', ['class' => 'btn btn-primary w-sm', 'id' => 'toggleCreate']) !!}
                                {!! Form::button('Toggle Edit', ['class' => 'btn btn-primary w-sm', 'id' => 'toggleEdit']) !!}
                                {!! Form::button('Toggle Delete', ['class' => 'btn btn-primary w-sm', 'id' => 'toggleDelete']) !!}
                            </div>
                        </div>
                        <hr>
                        @foreach($models as $model)
                                <div class="row check_group">
                                    <div class="col-sm-12">
                                        <h4 class="card-title">{{ $model }}</h4>
                                        <div class="checkbox my-2 all">
                                            <div class="custom-control custom-checkbox">
                                                {!! Form::checkbox('all_' . $model, null, false, ['id' => 'all_' . $model, 'class' => 'custom-control-input check_all' ]) !!}
                                                {!! Html::decode( Form::label('all_' . $model ,'Select All', ['class'=>'custom-control-label']) ) !!}
                                            </div>
                                        </div>
                                    </div>
                                    @php $modelPermissions = \App\Models\Permission::where('model', $model)->get(); @endphp
                                    @foreach($modelPermissions as $permission)
                                        <div class="col-md-4">
                                            <div class="checkbox my-2">
                                                <div class="custom-control custom-checkbox">
                                                    {!! Form::checkbox('permissions[]', $permission->id, false, ['id' => $permission->name, 'class' => 'custom-control-input' ]) !!}
                                                    {!! Html::decode( Form::label($permission->name ,$permission->label, ['class'=>'custom-control-label']) ) !!}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <hr>
                            @endforeach

                        @include('dashboard.accounts.common.buttons.buttons-crud', ['save' => true, 'cancel' => true, 'cancel_route' => 'dashboard.accounts.roles.index'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@endsection

@section('innerScriptFiles')
    <script src="{{ asset('dashboard/plugins/select2/select2.min.js') }}"></script>
@endsection
@section('innerScript')
    <script>
        $(document).ready(function() {
            let allChecked = false;
            let viewChecked = false;
            let createChecked = false;
            let editChecked = false;
            let deleteChecked = false;

            $('.select2').select2();

            $(".check_all").change(function() {
                let checked = this.checked;
                $(this)
                    .closest('.check_group')
                    .find('.custom-control-input')
                    .each(function() {
                        $(this).prop('checked', checked);
                    });
            });

            $("#toggleAll").click(function(){
                $(".custom-control-input").prop("checked", !allChecked);
                allChecked = !allChecked;
            });

            $("#toggleView").click(function(){
                $("[id^=view]").prop("checked", !viewChecked);
                viewChecked = !viewChecked;
            });

            $("#toggleCreate").click(function(){
                $("[id^=create]").prop("checked", !createChecked);
                createChecked = !createChecked;
            });

            $("#toggleEdit").click(function(){
                $("[id^=edit]").prop("checked", !editChecked);
                editChecked = !editChecked;
            });

            $("#toggleDelete").click(function(){
                $("[id^=delete]").prop("checked", !deleteChecked);
                deleteChecked = !deleteChecked;
            });
        });
    </script>
@endsection
