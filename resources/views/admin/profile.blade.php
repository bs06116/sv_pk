@extends('layout')
@section('content')
    <style>
        .content-page {
            width: calc(100% - 240px);
            margin: auto;
            margin-right: 0px;
        }
.nav-user img {

    margin-top: 11px !important;
}
        .upload-Text {
            cursor: pointer;
            border: 1px solid;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 700;
            background: #1b1a2f;
            color: #fff;
        }
@media only screen and (max-width: 768px) {
  .content-page {
    overflow: scroll;
    min-height: 100%;
    height: 100%;
    width:100%;
}
.form-liness{
        margin-left: 0 !important;
    margin-bottom: 102px;
}
.form-line button{
    margin-left:0px !important;
}
}
    </style>


    <div class="col-md-12">
        <div class="card m-b-20">
            <div class="card-body">

                <h4>Profile</h4>
                <br>
                <div class="row clearfix">

                    <div class="col-lg-12">
                        <div class="card">

                            <div class="body">
                                @foreach ($user as $users)


                                    <form action="{{ route('user.update', $users->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @method('PUT')

                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <label class="form-label">Name</label>
                                                        <input type="text" name="name" class="form-control"
                                                            value="{{ $users->name }}">

                                                    </div>
                                                </div>
                                            </div>
                                            @if (Auth::user()->type=='admin')
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="form-liness" style="margin-left: 144px;">
                                                        <p style="margin-left: 11px;"><img src="{{ asset($users->image) }}" id="output" width="100" style="border-radius:50px" />
                                                        </p>
                                                        <input type="file" accept="image/*" name="image" id="file"
                                                            onchange="loadFile(event)" style="display: none;">
                                                        <label class="upload-Text" for="file"
                                                            style="cursor: pointer;border-radius: 29px;">Change Image</label>
                                                        

                                                    </div>
                                                </div>
                                            </div>
                                            @elseif (Auth::user()->type=='csrf')
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="form-liness" style="margin-left: 144px;">
                                                        <p style="margin-left: 11px;"><img src="{{ asset($users->image) }}" id="output" width="100" style="border-radius:50px" />
                                                        </p>
                                                        
                                                        <label class="upload-Text changeImages" 
                                                            style="border-radius: 29px;">Change Image</label>
                                                            <br>
                                                            <p class="changeTexts"
                                                            style="color: red; text-align: center;display: none;"> For change your profile picture Please contact with administrator.</p>
                                                        

                                                    </div>
                                                </div>
                                            </div>
                                            @elseif (Auth::user()->type=='seller')
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="form-liness" style="margin-left: 144px;">
                                                        <p style="margin-left: 11px;"><img src="{{ asset($users->image) }}" id="output" width="100" style="border-radius:50px" />
                                                        </p>
                                                        
                                                        <label class="upload-Text changeImages" 
                                                            style="border-radius: 29px;">Change Image</label>
                                                            <br>
                                                            <p class="changeTexts"
                                                            style="color: red; text-align: center;display: none;"> For change your profile picture Please contact with administrator.</p>
                                                        

                                                    </div>
                                                </div>
                                            </div>
                                            @elseif (Auth::user()->type=='agent')
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="form-liness" style="margin-left: 144px;">
                                                        <p style="margin-left: 11px;"><img src="{{ asset($users->image) }}" id="output" width="100" style="border-radius:50px" />
                                                        </p>
                                                        
                                                        <label class="upload-Text changeImage" 
                                                            style="border-radius: 29px;">Change Image</label>
                                                            <br>
                                                            <p class="changeText"
                                                            style="color: red; text-align: center;display: none;"> For change your profile picture Please contact with administrator.</p>
                                                        

                                                    </div>
                                                </div>
                                            </div>
                                            @endif 
                                            <div class="col-lg-6"style="top: -87px;">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <label class="form-label">Number</label>
                                                        <input name="number" class="form-control"
                                                            value="{{ $users->number }}">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                            <div class="col-lg-6"style="top: -87px;left: -10px;">
                                                <div class="form-group" >
                                                    <div class="form-line">
                                                        <label class="form-label">Email</label>
                                                        <input name="email" class="form-control"
                                                            value="{{ $users->email }}">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6"style="top: -87px;left: -10px;">

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label class="form-label">Current Password</label>
                                                    <input type="password" name="password" class="form-control">
                                                    
                                                </div>
                                            </div></div>
                                            <div class="col-lg-6"style="top: -87px;left: -10px;">

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label class="form-label">New Password</label>
                                                    <input type="password" name="password" class="form-control">
                                                    
                                                </div>
                                            </div></div>
                                            <div class="col-lg-6"style="top: -87px;left: -10px;">

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label class="form-label">Confirm New Password</label>
                                                    <input type="password" name="confirm_password" class="form-control">
                                                    
                                                </div>
                                            </div></div>
                                            
                                        
                                    <div class="col-lg-6">
                                        <div class="form-group" >
                                            <div class="form-line">
                                       <button style="width: 142px;top: -76px;color: white;background-color: #1b1a2f;margin-left: 535px;border-radius: 33px;padding: 5px;" type="submit" class="btn btn-indigo btn-lg m-t-15 waves-effect">
                                        <i class="material-icons"></i>
                                        <span>SAVE</span>
                                       </button>
                                            </div>
                                        </div>
                                    </div>

                            </form>
                            @endforeach
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection


<script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };


</script>