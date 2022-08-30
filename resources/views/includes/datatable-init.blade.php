<script>
    $(document).ready(function () {
        $('#{{$table}}').DataTable({
            responsive: true,
            "pageLength": 50,
            "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
            "order": [], //Initial no order.
            "aaSorting": [],
            // "columnDefs": [
            //     {"orderable": false, "targets": [0, 1]}
            // ],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Global Search....."
            },
            dom: "<'row'<'col-md-4 col-sm-12'l><'col-md-4 col-sm-12 text-center'<'btn-group'B>><'col-md-4 col-sm-12'f>>tip",
            "buttons": [
                @if(isset($create))
                {
                    text: '<i class="fa fa-plus-circle"></i>',
                    "titleAttr": 'Create',
                    className: 'btn btn-sm btn-primary text-white',
                    action: function (dt, node, config) {
                        window.location = '{{ route($create) }}';
                    }
                },
                @endif
                {
                    "extend": 'csv',
                    "text": '<i class="far fa-file-excel"></i>',
                    "titleAttr": 'Export to CSV',
                    footer: true,
                    className: 'btn btn-sm btn-primary text-white',
                    exportOptions: {
                        columns: ':not(.noExport)'
                    }
                },
                {
                    "extend": 'excel',
                    "text": '<i class="fas fa-file-excel"></i>',
                    "titleAttr": 'Export to Excel',
                    footer: true,
                    className: 'btn btn-sm btn-primary text-white',
                    exportOptions: {
                        columns: ':not(.noExport)'
                    }
                },
                {
                    "extend": 'pdf',
                    "text": '<i class="fas fa-file-pdf"></i>',
                    "titleAttr": 'Export to PDF',
                    footer: true,
                    className: 'btn btn-sm btn-primary text-white',
                    exportOptions: {
                        columns: ':not(.noExport)'
                    }
                },
                {
                    "extend": 'print',
                    "titleAttr": 'Print',
                    "text": '<i class="fa fa-print"></i>',
                    footer: true,
                    className: 'btn btn-sm btn-primary text-white',
                    exportOptions: {
                        columns: ':not(.noExport)'
                    }
                },
            ],
        });

        $('.dt-button').each(function () {
            $(this).attr('data-toggle', 'tooltip');
        });
        $('[data-toggle="tooltip"]').tooltip({html: true});
    });
</script>
