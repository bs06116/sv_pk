@extends('layout')

@section("content")






            <span class="text-muted user-status"><i class="fa fa-dot-circle-o text-success"></i>


             </span>
          </div> 
        </div>
        <div id="sidebar-menu">
          <ul>
              <li>
                  <a href="" class="waves-effect">
                      <i class="mdi mdi-view-dashboard"></i>
                      <span> Dashboard <span class="badge badge-primary pull-right"></span></span>
                  </a>
              </li>
              <li>
                <a href="{{url('/')}}" class="waves-effect">
                    <i class="mdi mdi-view-dashboard"></i>
                    <span>Home <span class="badge badge-primary pull-right"></span></span>
                </a>
            </li>

              <li>
                  <a href="" class="waves-effect">
                      <i class="mdi mdi-view-dashboard"></i>
                      <span> Add Property <span class="badge badge-primary pull-right"></span></span>
                  </a>
              </li>

              <li>
                <a href="{{route('property.index')}}" class="waves-effect">
                    <i class="mdi mdi-view-dashboard"></i>
                    <span>View Property <span class="badge badge-primary pull-right"></span></span>
                </a>
            </li>
           
          </ul>
      </div>
        
        <div class="clearfix"></div>
      </div>
      @endsection