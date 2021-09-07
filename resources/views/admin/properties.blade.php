@extends('layout')
@section("content")

                <div class="col-md-12"> 
                    <div class="card m-b-20">
                        <div class="card-body" style="overflow-x:auto;">
                            <h4>Property</h4>
                            <br>
                            <table id="datatable" class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>images</th>
                                    <th>City</th>
                                    <th>Contact No</th>
                                    <th>Property Type</th>
                                    <th>View</th>
                                    <!--<th>Status</th>-->
                                    
                                    
                                </tr>
                                </thead>
            
                                <tbody>
                                @php
                                    $cities=App\Models\Seller::where('status','=','seller')->get();
                                    $key=1
                                 @endphp
                                 @foreach ($cities as $seller)  
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$seller->name}}</td>
                                        <td>{{$seller->email}}</td>
                                        <td><img src="{{$seller->image}}" width="50" height="50" /><style>img {border:; }</style> </td>
                                        <td>{{$seller->city}}</td>
                                        <td>{{$seller->phone_num}}</td>
                                        <td>{{$seller->type}}</td>
                                        
                                        {{-- <td>
                                            <form action="{{route('seller.destroy',$seller->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td> --}}
                                        <td>     
                                             <form action="{{route('seller.show',$seller->id)}}" method="post">
                                                 @csrf
                                                  @method('GET')
                                                   <button class="btn btn-danger">preview</button>
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
              