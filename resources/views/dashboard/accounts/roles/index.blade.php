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
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Label</th>
                                    <th>Permissions</th>
                                    <th>Users</th>
                                    <th>Created Date</th>
                                    <th>Last Update</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)
                                    @if ($role->id > 1)
                                        <tr>
                                            <td></td>
                                            <td class="text-center">
                                                @if ($role->id > 2)
                                                    <div class="dropdown d-inline-block">
                                                        <a class="nav-link dropdown-toggle arrow-none" id="dLabel8"
                                                           data-toggle="dropdown" href="#" role="button"
                                                           aria-haspopup="false" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-left"
                                                             aria-labelledby="dLabel8" x-placement="top-end"
                                                             style="position: absolute; transform: translate3d(-121px, -72px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            <form
                                                                action="{{ route('dashboard.accounts.roles.destroy',$role->id) }}"
                                                                method="POST" id="deleteForm{{ $role->id }}">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                            @can('hasAccess', 'edit_role')
                                                                <a href="{{ route('dashboard.accounts.roles.edit', $role->id) }}"
                                                                   class="dropdown-item"><i class="fa fa-edit"></i> Edit</a>
                                                            @endcan
                                                            @can('hasAccess', 'delete_role')
                                                                <button type="button" class="dropdown-item"
                                                                        onclick="DeleteEntry({{ $role->id }});">
                                                                    <i class="fa fa-trash"></i> Delete
                                                                </button>
                                                            @endcan
                                                        </div>
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                {{ $role->id }}
                                            </td>
                                            <td>{{$role->name}}</td>
                                            <td>{{$role->label}}</td>
                                            <td>
                                                @if ($role->permissions)
                                                    <select class="form-control select2" style="width:100%">
                                                        @foreach($role->permissions as $permission)
                                                            <option>{{$permission->label}}</option>
                                                        @endforeach
                                                    </select>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($role->users)
                                                    <select class="form-control select2" style="width:100%">
                                                        @foreach($role->users as $user)
                                                            @if ($user->id > 1)
                                                                <option>{{$user->name}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                @endif
                                            </td>
                                            <td>{{ \AccountHelper::date_format( $role->created_at ) }}</td>
                                            <td>{{ \AccountHelper::date_format( $role->updated_at ) }}</td>
                                        </tr>
                                    @endif
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
    @include('includes.datatable-init', ['table' => 'datatable', 'create' => 'dashboard.accounts.roles.create'])
    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
@endsection
