@extends('layout')
@section('content')


                <div class="col-md-12"> 
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4>Seller List</h4>
                            <br>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Contact No</th>
                                    <th>Delete</th> 
                                     <th>Status</th> 
                                    
                                    
                                </tr>
                                </thead>
            
                                <tbody>
                                    
                                @foreach (App\Models\User::seller() as $key => $user)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->number}}</td>  
                                        <td>
                                            <form action="{{route('user.destroy',$user->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                        
                                         
                                        {{-- <td>
                                            <a href="{{route('user.edit',$user->id)}}"class="btn btn-danger btm-xs"><i class="fa fa-edit"></i></a> --}}
                                            {{-- <form action="{{route('product.edit',$product->id)}}" method="POST">
                                                @method('PUT')
                                                @csrf
                                                <button class="btn btn-danger btm-xs"><i class="fa fa-edit"></button>
                                            </form> --}}
                                        {{-- </td> --}}
                                         <td>
                                @if ($user->status == 0)
                                <a href="{{route('unfeatures',$user->id)}}"> <button type="button"
                                    class="btn btn-sm btn-danger">OFF</button></a>
                               
                                @else
                                <a href="{{route('features',$user->id)}}"> <button type="button"
                                    class="btn btn-sm btn-primary">ON</button></a>
                                
                                @endif
                            </td>
                                    </tr>
                                @endforeach
                                </tbody> 
            
                            </table>
                        </div>
                    </div>
                 </div> 
   @endsection