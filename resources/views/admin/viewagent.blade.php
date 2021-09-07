@extends('layout')
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<style>
    .modal-title{
        margin:auto !important;
    }
     
    #datatable{
        width:100% !important;
    }
    .content-page {
        height: 100%;
        overflow: scroll !important;
        min-height: 100% !important;
    }
    @media only screen and (max-width: 768px) {
       
       table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before{
        top: 24px;
        left: 0px;
        height: 14px;
    } 
    }
</style>
@section('content')


    <div class="col-md-12">
        <div class="card m-b-20">
            <div class="card-body" style="overflow-x:auto;">
                <h4>Agents List</h4>
                <div class="btnmodl">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                        data-whatever="@getbootstrap">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Add Estate Agent</button>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div>
                                    <h4 class="modal-title" id="exampleModalLabel"><b>Real Estate Agent Form<b></h4>
                                </div>
                                <div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>

                            <div class="modal-body">
                                <form method="post" action="{{ route('user.store') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div style="display: flex;margin-top: 20px;justify-content: center;">
                                        <div class="form-group agentrrr">
                                            <label for="recipient-name" class="col-form-label">Name</label>
                                            <input name="name" type="text" class="form-control" id="recipient-name"
                                                placeholder="{{ trans('Name') }}">
                                            <input type="hidden" value="agent" name="type">
                                        </div>
                                        <div class="form-group mal">
                                            <label for="recipient-name" class="col-form-label">Email</label>
                                            <input name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required placeholder="{{ trans('Email') }}">
                                                @if($errors->has('email'))
                                            <div class="invalid-feedback"style="font-size: 11px;color: red;}">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                        </div>
                                    </div>
                                    <div style="display: flex;margin-top: 20px;justify-content: center;">
                                        <div class="form-group agentuuuu">
                                            <label for="recipient-name" class="col-form-label">Password</label>
                                            <input name="password" type="password" class="form-control" id="recipient-name"
                                                placeholder="{{ trans('Password') }}">
                                        </div>
                                        <div class="form-group mal">
                                            <label for="recipient-name" class="col-form-label">Confirm Password</label>
                                            <input name="confirm_password" type="password" class="form-control"
                                                id="recipient-name" placeholder="{{ trans('Confirm Password') }}">
                                        </div>
                                    </div>
                                    <div style="display: flex;margin-top: 20px;justify-content: center;">
                                        <div class="form-group agentlll">
                                            <label for="recipient-name" class="col-form-label">Company Name</label>
                                            <input name="company" type="text" class="form-control" id="recipient-name"
                                                placeholder="{{ trans('Company Name') }}">
                                        </div>
                                        <div class="form-group mal">
                                            <label for="pakage" class="col-form-label" name="pakage">Pakage</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="pakage">
                                                    <option name="pakage">Select Pakage </option>
                                                    <option value="25">Basic</option>
                                                    <option value="40">Silver</option>
                                                    <option value="90">Gold</option>
                                                    <option value="150">Platinum</option>
                                                    <option value="200">Diamond</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="display: flex;margin-top: 20px;justify-content: center;">
                                        <div class="form-group  agentdddd">
                                            <label for="recipient-name" class="col-form-label">Logo</label>
                                            <input name="image" type="file" class="form-control">
                                            {{-- <input type="text" class="form-control" id="recipient-name"> --}}
                                        </div>
                                        <div class="form-group mal">
                                            <label for="recipient-name" class="col-form-label">Contact NO</label>
                                            <input class="form-control" name="number" type="tel" value=""
                                                id="example-tel-input" placeholder="{{ trans('Phone Number') }}">
                                        </div>
                                    </div>
                                         <div style="display: flex;margin-top: 20px;justify-content: center;">
                                            <div class="form-group  agentdddd">
                                                <label for="recipient-name" class="col-form-label"style="
                                                margin-left: 52px;">City</label>
                                                <input name="city" type="text" class="form-control"placeholder="{{ trans('City') }}" style="width: 192px;margin-left: 52px;height: 41px;">
                                            </div>
                                            <div class="form-group mal">
                                                <label for="recipient-name" class="col-form-label"style="
                                                margin-left: -61px;">Address</label>
                                                <input class="form-control" name="address" type="text" value=""
                                                    id="example-tel-input" placeholder="{{ trans('Address') }}"style="
                                                    margin-left: -61px;">
                                            </div>
                                        </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>




                <br>
                <div style="overflow-x:auto;">
                    <table id="datatable" class="table-responsive table table-bordered dt-responsive nowrap" style="overflow-x:auto;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Company</th>
                                <th>Contact No</th>
                                <th>Image</th>
                                <th>Edit Agents</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach (App\Models\User::agent() as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    {{-- @if ($user->block == 0)
                                    <td><span class="badge badge-danger">Active</span></td>
                                    @else
                                    <td><span class="badge badge-danger">Terminate</span></td>
                                    @endif --}}
                                    <!--<td>-->
                                    <!--    <div class="onoffswitch">-->
                                    <!--        <p>Off</p>-->
                                    <!--    </div>-->
                                    <!--</td>-->
                                    <td>{{ $user->company }}</td>
                                    <td>{{ $user->number }}</td>
                                    <td><img src="{{$user->image}}" width="50" height="50" /><style>img {border:; }</style></td>
                                   
                                   <td>
                                    <a href="{{route('user.edit',$user->id)}}"class="btn btn-danger"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                   </td>
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
    </div>
<script src="{{asset('new/assets/js/app.js')}}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@toastr_render
@endsection
