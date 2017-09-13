
@foreach ($newspapers as $newspaper)
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <!-- Preview Image -->
            <img class="img-responsive rounded center-block" src="img/rzepin.jpg" alt="">
            <!-- Title -->
            <hr>
            <h2 class="mt-4 text-center">{{$newspaper->title}}</h3>
            <hr>
            <!-- Post Content -->
            <p class="text-justify">{{$newspaper->body}}</p>
            <hr>
          </div>
          <div class="panel-footer">
            <!-- Date/Time/User -->


            <div class="row">
              <div class="col-lg-8 col-xs-8 col-sm-8 col-md-8">
                <p class="text-left">Autor:  <span class="text-danger">{{$newspaper->user->name}} {{$newspaper->user->surname}}</span></p>
              </div>
              <div class="col-lg-4  col-xs-4 col-sm-4 col-md-4">
                <p class="text-right"><span class="text-primary">{{$newspaper->created_at->diffForHumans()}}</span></p>
              </div>
            </div>



          </div>

        </div>

      </div>


    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  <br>
  <br>
<hr>

@endforeach
