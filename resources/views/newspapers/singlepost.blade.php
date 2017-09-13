
@foreach ($newspapers as $newspaper)
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <!-- Preview Image -->
            <img class="img-responsive rounded center-block" src="http://placehold.it/1200x300" alt="">
            <!-- Title -->
            <hr>
            <h1 class="mt-4 text-center">{{$newspaper->title}}</h1>
            <hr>
            <!-- Post Content -->
            <p class="text-justify">{{$newspaper->body}}</p>
            <hr>
          </div>
          <div class="panel-footer">
            <!-- Date/Time/User -->


            <div class="row">
              <div class="col-lg-6">
                <p class="text-left">Autor:  <mark class="text-danger">{{$newspaper->user->name}} {{$newspaper->user->surname}}</mark></p>
              </div>
              <div class="col-lg-6">
                <p class="text-right">Utworzono <mark class="text-primary">{{$newspaper->created_at->diffForHumans()}}</mark></p>
              </div>
            </div>



          </div>

        </div>

      </div>


    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<hr>
<hr>
<hr>
@endforeach
