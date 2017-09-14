
@foreach ($newspapers as $newspaper)
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <!-- Preview Image -->
            <img class="img-responsive rounded center-block" src="img/{{$newspaper->img}}" alt="">
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
              <div class="col-lg-7 col-xs-7 col-sm-7 col-md-7">
                <p class="text-left">Autor:  <span class="text-danger">{{$newspaper->user->name}} {{$newspaper->user->surname}}</span></p>
              </div>
              <div class="col-lg-5  col-xs-5 col-sm-5 col-md-5">
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

@endforeach
