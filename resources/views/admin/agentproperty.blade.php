@extends('layout')
<style>
    #datatable{
        width:100% !important;
    }
    .content-page{
        height:100%;
        overflow: scroll !important;
        min-height: 100% !important;
    }
</style>
@section("content")

                <div class="col-md-12"> 
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4>Product</h4>
                            <br>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap table-responsive">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>images</th>
                                    <th>City</th>
                                    <th>Contact No</th>
                                    <th>Delete</th>
                                     <th>View</th> 
                                     <!--<th>Status</th> -->
                                    
                                </tr>
                                </thead>
            
                                <tbody>
                                    @php
                                    $cities=App\Models\Seller::where('status','=','agent')->get();
                                    $key=1
                                 @endphp
                                 @foreach ($cities as $seller)     
                                {{-- @foreach (App\Models\Seller::where('status','=','agent') as $key => $agent) --}}
                                    <tr>
                                        <td>{{($key++)}}</td>
                                        <td>{{$seller->name}}</td>
                                        <td>{{$seller->email}}</td>
                                        <td><img src="{{$seller->image}}" width="50" height="50" /><style>img {border:; }</style> </td>
                                        <td>{{$seller->city}}</td>
                                        <td>{{$seller->phone_num}}</td> 
                                        <td>
                                            <form action="{{route('seller.destroy',$seller->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                        <td>     
                                             <form action="{{route('seller.show',$seller->id)}}" method="post">
                                                 @csrf
                                                  @method('GET')
                                                   <button class="btn btn-danger">Preview</button>
                                            </form> 
                                        </td> 
                                    </tr>
                                @endforeach
                                </tbody> 
            
                            </table>
                        </div>
                    </div>
                </div>

   @endsection
              