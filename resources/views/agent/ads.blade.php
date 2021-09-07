@extends('layout')
@section("content")

<div class="row">
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <form method="post" action="{{ route('ads') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Ads URL</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="url" type="text" value="" id="example-text-input"
                                placeholder="{{ trans('Ads URL') }}">
                                {{-- <input class="form-control" type="hidden" value="agent" name="type" required="" placeholder="Name"> --}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-search-input" class="col-sm-2 col-form-label">Upload
                            Image</label>
                        <div class="col-sm-10">

                            <input name="image" type="file" class="form-control" required>
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="password" type="password" value="" id="example-text-input"
                                placeholder="{{ trans('Password') }}">
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary submitFormBtn">Submit</button>
                    </div>
                </form>
            </div> <!-- Page content Wrapper -->

        </div>
    </div>
</div>              

   @endsection
              