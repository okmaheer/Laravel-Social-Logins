@extends('layouts.dashboard')
@section('page_title', $page_title)
@section('innerStyleSheet')
    @include('includes.datatable-css')
    <link href="{{ asset('dashboard/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')

    @include('includes.dashboard-breadcrumbs')

@section('body')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        @include('includes.messages')
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive "
                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th class="no-sort"></th>
                                    <th class="text-center no-sort">Action</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Roles</th>
                                    <th>PettyCash Account</th>
                                    <th>Created Date</th>
                                    <th>Last Update</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td></td>
                                        <td class="text-center">
                                            @if ($user->id > 2)
                                                <div class="dropdown d-inline-block">
                                                    <a class="nav-link dropdown-toggle arrow-none" id="dLabel8"
                                                       data-toggle="dropdown" href="#" role="button"
                                                       aria-haspopup="false"
                                                       aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-left"
                                                         aria-labelledby="dLabel8" x-placement="top-end"
                                                         style="position: absolute; transform: translate3d(-121px, -72px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                        <form
                                                            action="{{ route('dashboard.accounts.users.destroy',$user->id) }}"
                                                            method="POST" id="deleteForm{{ $user->id }}">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>

                                                        @can('hasAccess', 'edit_user')
                                                            <a href="{{ route('dashboard.accounts.users.edit', $user->id) }}"
                                                               class="dropdown-item"><i class="fa fa-edit"></i> Edit</a>
                                                        @endcan
                                                        @can('hasAccess', 'delete_user')

                                                            <button type="button" class="dropdown-item"
                                                                    onclick="DeleteEntry({{ $user->id }});">
                                                                <i class="fa fa-trash"></i> Delete
                                                            </button>
                                                        @endcan

                                                    </div>
                                                </div>
                                            @endif
                                        </td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td class="text-center">
                                            <h4>
                                                @if($user->active)
                                                    <span class="badge badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-danger">InActive</span>
                                                @endif
                                            </h4>
                                        </td>
                                        <td>
                                            @if ($user->roles)
                                                <select class="form-control select2" style="width:100%">
                                                    @foreach($user->roles as $role)
                                                        <option>{{$role->label}}</option>
                                                    @endforeach
                                                </select>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $user->is_PettyCash ? 'Yes' : 'No' }}</td>
                                        <td>{{ \AccountHelper::date_format( $user->created_at ) }}</td>
                                        <td>{{ \AccountHelper::date_format( $user->updated_at ) }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container -->
        @include('includes.dashboard-footer')
    </div>
@endsection
@endsection
@section('innerScriptFiles')
    @include('includes.datatable-js')
    <script src="{{ asset('dashboard/plugins/select2/select2.min.js') }}"></script>
@endsection
@section('innerScript')
    @include('includes.datatable-init', ['table' => 'datatable', 'create' => 'dashboard.accounts.users.create'])
    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
@endsection
