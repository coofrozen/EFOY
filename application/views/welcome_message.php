
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Efoy. Welcome</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("assets/bootstrap.min.css");?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/all.min.css");?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/style.css");?>" rel="stylesheet" />
    <meta name="theme-color" content="#563d7c">

  
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url("assets/custome.css");?>" rel="stylesheet">
</head>

<body>
    <header>
        <div b-tdnf336fqy class="bg-dark" id="navbarHeader">
            <div b-tdnf336fqy class="navbar navbar-dark bg-primary shadow-sm">
                <div b-tdnf336fqy class="container d-flex justify-content-between">
                    <a b-tdnf336fqy href="#" class="navbar-brand d-flex align-items-center">
                        <strong b-tdnf336fqy><?php echo $title;?> - PaymentAPI <sup b-tdnf336fqy>v1.0</sup></strong>
                    </a>
                    <?php if($title == "Ethio Exams"){
                        echo '<a href="http://196.189.155.94/efoy/welcome/Dashboard/lh" class="navbar-brand d-flex align-items-center">Life Hack</a>';
                    }
                    else{
                        echo '<a href="http://196.189.155.94/efoy/welcome/Dashboard/ex" class="navbar-brand d-flex align-items-center">Exam</a>';
                    } 
echo '<a href="'.base_url("login/logout").'" class="navbar-brand d-flex align-items-center">Logout</a>';
echo '<a href="'.base_url("main").'" class="navbar-brand d-flex align-items-center">To Main</a>';


?>

                    
                    
                </div>
            </div>
    </header>

    <main b-tdnf336fqy role="main">
                    
           
        <!-- <section class="jumbotron text-center mt-1"> -->
        <div class="container mt-5 text-center p-3">
            <img src="http://196.189.155.94/efoy/assets/img/efoy.png" alt="Efoy Tech">
            <h1><?php echo $title;?> Digital Payment System</h1>
            <p class="lead text-muted">By the community, To the community</p>
        </div>
        <!-- </section> -->

        <div class="container">

            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm ">
                       <div class="text-center bg-black">Customers Info</div>
                    <div class="p-2 bg-info text-white text-center">

                        Daily OptIn: <span class="badge badge-default">
                            <h6>0</h6>
                        </span> |
                        Total: <span class="badge badge-default">
                            <h6> 0</h6>
                        </span>
                    </div>
                    </div>
                     <div class="card mb-4 shadow-sm ">
                        <div class="pt-3 text-center text-white bg-success">
                            Daily Report |
                       <?php echo date('y/m/d'); ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><span class="badge badge-info px-2">Success Rate:
                    0.00 %</span>
                            </h5>
                            <div class="mr-auto w-200">
                                <h5> <span class="text-muted">Total Sent</span>
                                    <span class="badge badge-light px-3">0.00
                                    </span>
                                </h5>
                                <h5> <span class="text-muted">Success </span>
                                    <span class="badge badge-success px-3">
                                        0 Requests
                                    </span>
                                </h5>
                                <h5> <span class="text-muted">Failed </span>
                                    <span class="badge badge-danger px-3"> 0 Requests
                                    </span>
                                </h5>
                            </div>
                            <!-- <small class="text-muted">Details</small> -->
                        </div>
                        <h6 class="p-3">Monthly Success Rate: <span
                                class="badge badge-primary"> ____%</span></h6>
                        <div class="p-2 bg-success  text-white text-center">
                            <div>Revenu Report</div>
                            Daily: <span class="badge badge-default">
                                <h6>0 ETB</h6>
                            </span> |
                            Monthly: <span class="badge badge-default">
                                <h6>0 ETB</h6>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Make First Payemnt Request -->
                <div class="col-md-8">
                    <table class="table table-striped" id="datatablesSimple">
                    <thead class="table-primary">
                        <tr>
                            <th class='text-center'>Total Daily Revenue (In Birr)</th>
                            <th class='text-center'>Date</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class='text-center'>Total Daily Revenue (In Birr)</th>
                            <th class='text-center'>Date</th>
                        </tr>
                    </tfoot>
                    <tbody> 
                    <?php foreach ($record as $value) {?>
                        <tr>
                            <td class='text-center'>
                                <?php echo ($value->revenue)*2; ?> birr
                            </td>
                            <td class='text-center'>
                                <?php echo $value->cur_date; ?>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
                </table>
                </div>

            </div>

            <!-- customer info card -->
            
        </div>

        </div>


    </main>

    <footer b-tdnf336fqy class="text-muted">
        <div b-tdnf336fqy class="container">
            <p b-tdnf336fqy class="float-right">
                <a b-tdnf336fqy href="#">Back to top</a>
            </p>
            <p b-tdnf336fqy><a class="" href="mailto:coofrozen@gmail.com">Efoy Design &copy; 2023</a></p>
        </div>
    </footer>
    <!-- <script src="./jquery-3.4.1.slim.min.js"></script> -->
     <script src="<?php echo base_url("assets/datatables-simple-demo.js");?>" crossorigin="anonymous"></script>
        <script src="<?php echo base_url("assets/simple-datatables.js");?>"></script>
    <script src="<?php echo base_url("assets/jquery.min.js");?>"></script>
    <script>
    window.jQuery || document.write(
        '<script src="<?php echo base_url("assets/jquery.slim.min.js");?>"><\/script>')
    </script>
    <script src="<?php echo base_url("assets/bootstrap.bundle.min.js");?>"></script>
    <!-- <script src="./bs-custom-file-input.js" ></script> -->
    <!-- <script src="https://www.viralpatel.net/demo/jquery/jquery.shorten.1.0.js"></script> -->

    
</body>

</html>