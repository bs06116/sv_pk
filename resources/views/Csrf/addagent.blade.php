@extends('layout')
<link href="{{asset('new/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css">
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
                    <select class="form-control" name="pakage"style="
                    width: 190px;
                    margin-left: -6px;height: calc(2.25rem + 4px);">
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
                <label for="recipient-name" class="col-form-label"style="
                margin-left: 52px;">Logo</label>
                <input name="image" type="file" class="form-control" style="width: 192px;margin-left: 52px;height: 41px;">
                {{-- <input type="text" class="form-control" id="recipient-name"> --}}
            </div>
            <div class="form-group mal">
                <label for="recipient-name" class="col-form-label"style="
                margin-left: -61px;">Contact NO</label>
                <input class="form-control" name="number" type="tel" value=""
                    id="example-tel-input" placeholder="{{ trans('Phone Number') }}"style="
                    margin-left: -61px;">
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
   
<script src="{{asset('new/assets/js/app.js')}}"></script>
  <script src="{{asset('new/toastr/toastr.min.js')}}"></script>
  @toastr_render
@endsection
