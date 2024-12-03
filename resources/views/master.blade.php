<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Feedback</title>
        @include('frontend.style')
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
            </div>

            @include('frontend.navbar') <!-- navbar -->

            @include('frontend.sidebar') <!-- sidebar -->

            <!-- Content Wrapper -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Dashboard</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard v1</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                      <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                          <!-- general form elements -->
                          <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                  <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="name" class="form-control" id="exampleInputName1" placeholder="Enter name">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputTitle1">Title</label>
                                    <input type="title" class="form-control" id="exampleInputTitle1" placeholder="Enter title">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputMessage1">Message</label>
                                      <input type="message" class="form-control" id="exampleInputMessage1" placeholder="Message here!">
                                    </div>
                               
                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                              </div>
                              <!-- /.card-body -->
                
                              <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                            </form>
                          </div>
                      </div>
                      <!-- /.row -->
                    </div><!-- /.container-fluid -->
                  </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            @include('frontend.footer') <!-- footer -->
    </body>
</html>