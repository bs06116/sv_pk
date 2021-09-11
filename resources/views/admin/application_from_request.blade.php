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
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Marial Status</th>
                            <th>Mobile</th>
                            <th>CNIC</th>
                            <th>Address</th>
                            <th>Profession</th>
                            <th>Intrested in</th>
                            <th>Size</th>
                            <th>Society</th>
                            <th>CDA</th>
                            <th>Size Appartment</th>
                            <th>Land Socities</th>
                            <th>Society intrested</th>
                            <th>Sector Area</th>
                            <th>Down Payment</th>
                            <th>Monthly Installment</th>
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
                        name: 'Name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'gender',
                        name: 'gender'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'mobile',
                        name: 'mobile'
                    },
                    {
                        data: 'CNIC',
                        name: 'CNIC'
                    },
                    {
                        data: 'address',
                        name: 'address'
                    },
                    {
                        data: 'profession',
                        name: 'profession'
                    },

                    {
                        data: 'intrested_in',
                        name: 'intrested_in'
                    },
                    {
                        data: 'size',
                        name: 'size'
                    },
                    {
                        data: 'society',
                        name: 'society'
                    },
                    {
                        data: 'cda',
                        name: 'cda'
                    },
                    {
                        data: 'size_appartment',
                        name: 'size_appartment'
                    },
                    {
                        data: 'land_socities',
                        name: 'land_socities'
                    },
                    {
                        data: 'society_intrested',
                        name: 'society_intrested'
                    },
                    {
                        data: 'sector_area',
                        name: 'sector_area'
                    },
                    {
                        data: 'down_payment',
                        name: 'down_payment'
                    },
                    {
                        data: 'monthly_installment',
                        name: 'monthly_installment'
                    }



                ]
            });

            //   $('#approved').change(function(){
            //       table.draw();
            //   });

        });
    </script>
@endpush
