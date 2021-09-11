@extends('layout')
@section('title', 'Application Form Requrest')

@section('content')
    <div class="col-md-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4>Product</h4>
                <br>
                <table class="table table-bordered dt-responsive nowrap table-responsive datatable data-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                        </tr>
                    </thead>

                    <tbody>
                    </tbody>

                </table>
            </div>
        </div>
    </div>


@endsection
@push('js')
    <script type="text/javascript">
        $(function() {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('application-from-request') }}",
                    data: function(d) {
                        //   d.approved = $('#approved').val(),
                        //  d.search = $('input[type="search"]').val()
                    }
                },
                columns: [
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                ]
            });

            //   $('#approved').change(function(){
            //       table.draw();
            //   });

        });
    </script>
@endpush
