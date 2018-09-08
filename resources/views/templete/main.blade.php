<!DOCTYPE html>
<html>
@include('templete.elements.head')
<body class="hold-transition skin-green layout-boxed sidebar-mini">
<div class="wrapper">
@include('templete.elements.header')
@include('templete.elements.aside')
  <div class="content-wrapper">


    <section class="content-header">
      <h1>
        @yield('title')
        
      </h1>
      <ol class="breadcrumb">
       @yield('nuevo') 
      </ol>
    </section>
    <section class="content">
       <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">@yield('title')</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

          @if(count($errors) > 0)
            <div class="alert alert-danger">
              <ul>
                @foreach($errors -> all() as $error)       
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div> 
          @endif
          @include('flash::message')
          @yield('content')
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          @yield('foot')
        </div>
        <!-- /.box-footer-->
      </div>
    </section>















  </div>
@include('templete.elements.foot')
</div>
@include('templete.elements.javas')

</body>
</html>
