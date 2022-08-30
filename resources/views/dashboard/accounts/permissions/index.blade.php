@extends('layouts.dashboard')
@section('page_title')
@section('content')
@section('innerStyleSheet')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('dashboard/plugins/datatables/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('dashboard/plugins/datatables/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('dashboard/plugins/datatables/responsive.bootstrap4.min.css') }}">
@endsection
@include('includes.dashboard-breadcrumbs')

@section('body')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
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
                                <th>Roles</th>
                                <th>Created Data</th>
                                <th>Last Update</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($permissions as $permission)
                                <tr>
                                    <td></td>
                                    <td class="text-center">
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle arrow-none" id="dLabel8" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left"
                                                 aria-labelledby="dLabel8" x-placement="top-end"
                                                 style="position: absolute; transform: translate3d(-121px, -72px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <form
                                                    action="{{ route('dashboard.accounts.permissions.destroy',$permission->id) }}"
                                                    method="POST">
                                                    {!! link_to_route('dashboard.accounts.permissions.edit', "Edit", $permission->id, ['class' => 'dropdown-item']) !!}
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item"
                                                            onclick="return confirm('Are you sure you want to delete this item?');">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        {{ $permission->id }}
                                    </td>
                                    <td>{{$permission->name}}</td>
                                    <td>{{$permission->label}}</td>
                                    <td>
                                        @if ($permission->roles)
                                            <select class="form-control form-control-sm">
                                                @foreach($permission->roles as $role)
                                                    <option>{{$role->label}}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </td>
                                    <td>{{ $permission->created_at }}</td>
                                    <td>{{ $permission->updated_at }}</td>
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
    <script src="{{ asset('dashboard/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('dashboard//plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
@endsection
@section('innerScript')
    <script>
        $(document).ready(function () {
            $('#datatable').DataTable({
                responsive: true,
                "pageLength": 10,
                "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
                "columnDefs": [
                    {"orderable": false, "targets": [0, 1]}
                ],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Global Search....."
                },
                dom: 'Bfrtip',
                "buttons": [
                    {
                        "extend": 'csv',
                        "text": '<i class="fa fa-file-excel"></i> Export',
                        "titleAttr": 'CSV',
                        className: 'btn bg-primary btn-sm mx-1 datatable-btn',
                        "filename": function () {
                            var d = new Date();
                            var n = d.getTime();
                            return 'permissions_' + n;
                        },
                        "footer": true,
                        exportOptions: {
                            columns: ':not(.noExport)'
                        }
                    }
                    , {
                        text: '<i class="fa fa-plus-circle"></i> Create',
                        className: 'btn bg-primary btn-sm mx-1 datatable-btn',
                        action: function (dt, node, config) {
                            window.location = '{{ route('dashboard.accounts.permissions.create') }}';
                        }
                    }
                ],
            });
        });
    </script>
@endsection
