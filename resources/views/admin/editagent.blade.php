@extends('layout')
<style>
@media only screen and (max-width: 768px) {
     .card-body form div{
                justify-content: initial !important;
        }
        .card-body form div .form-group{
            width:100% !important;
        }
}
</style>
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">
                    <form method="post" action="{{ route('user.update',$user->id) }}"
                        enctype="multipart/form-data">
                        @method('PUT')
                        {{ csrf_field() }}

                        <div style="display: flex;margin-top: 20px;justify-content: center;">
                            <div class="form-group agentrrr">
                                <label for="recipient-name" class="col-form-label">Name</label>
                                <input name="name" type="text"value="{{$user->name}}" class="form-control" id="recipient-name"
                                    placeholder="{{ trans('Name') }}">
                                <input type="hidden" value="agent" name="type">
                            </div>
                            <div class="form-group mal">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <input name="email" value="{{$user->email}}"type="email" class="form-control" id="recipient-name"
                                    placeholder="{{ trans('Email') }}">
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
                                <input name="confirm_password"value="{{$user->confirm_password}}" type="password" class="form-control"
                                    id="recipient-name" placeholder="{{ trans('Confirm Password') }}">
                            </div>
                        </div>
                        <div style="display: flex;margin-top: 20px;justify-content: center;">
                            <div class="form-group agentlll">
                                <label for="recipient-name" class="col-form-label">Company Name</label>
                                <input name="company"value="{{$user->company}}" type="text" class="form-control" id="recipient-name"
                                    placeholder="{{ trans('Company Name') }}">
                            </div>
                            <div class="form-group mal">
                                <label for="pakage" class="col-form-label" name="pakage">Pakage</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="pakage"value="pakage">
                                        <option name="pakage" value="{{$user->pakage}}">Select Pakage </option>
                                        <option value="25"@php if($user->pakage=="Basic"){echo "selected";} @endphp>Basic</option>
                                        <option value="40"@php if($user->purpose=="Silver"){echo "selected";} @endphp>Silver</option>
                                        <option value="90"@php if($user->purpose=="Gold"){echo "selected";} @endphp>Gold</option>
                                        <option value="150"@php if($user->purpose=="Platinum"){echo "selected";} @endphp>Platinum</option>
                                        <option value="200"@php if($user->purpose=="Diamond"){echo "selected";} @endphp>Diamond</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div style="display: flex;margin-top: 20px;justify-content: center;">
                            <div class="form-group  agentdddd" style="    margin-right: 50px;
                            width: 20%;">
                                <label for="recipient-name" class="col-form-label">Logo</label>
                                <input name="image" value="" @php if($user->image==""){echo "selected";} @endphp type="file" class="form-control">
                                {{-- <input type="text" class="form-control" id="recipient-name"> --}}
                            </div>
                            <div class="form-group mal">
                                <label for="recipient-name" class="col-form-label">Contact NO</label>
                                <input class="form-control" name="number"value="{{$user->number}}" type="tel" value=""
                                    id="example-tel-input" placeholder="{{ trans('Phone Number') }}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>                    </form>
                </div> <!-- Page content Wrapper -->

            </div>
        </div>
    </div>
        @endsection
