<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DataTables | Gentelella</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <style type="text/css">
      body { 
    background: url('img/dark-bg.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
    background-size: cover;
    font-family: 'Kanit', sans-serif;
    font-size: 14px
    }
  #toTop{
    position: fixed;
    bottom: 10px;
    right: 10px;
    cursor: pointer;
    display: none;
  }
    </style>
  </head>

  <body>
    <div class="container body">
      
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>

              <ul class="nav navbar-nav navbar-left">
                <li class="">
                  <a href="#" class="user-profile dropdown-toggle" aria-expanded="false" data-toggle="modal" data-target="#warning">
                    <h5>.</h5>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div style="margin:90px 15%;">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>แบบสัมภาษณ์ข้อมูลพื้นฐาน</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="padding: 5px 20px">
                  <!-- Smart Wizard -->
                    
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              ส่วนที่ 1<br />
                                              <small>ข้อมูลส่วนบุคคล</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              ส่วนที่ 2<br />
                                              <small>ข้อมูลการประเมินภาวะสุขภาพ</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              ส่วนที่ 3<br />
                                              <small>ประเมินด้านการรู้คิดและจิตใจ</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                              ส่วนที่ 4<br />
                                              <small>Step 4 description</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-5">
                            <span class="step_no">5</span>
                            <span class="step_descr">
                                              ส่วนที่ 5<br />
                                              <small>Step 3 description</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-6">
                            <span class="step_no">6</span>
                            <span class="step_descr">
                                              ส่วนที่ 6<br />
                                              <small>Step 3 description</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-7">
                            <span class="step_no">7</span>
                            <span class="step_descr">
                                              ส่วนที่ 7<br />
                                              <small>Step 3 description</small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                          
                        <?php include 'form1.php'; ?>

                      </div>
                      <div id="step-2">
                        <?php include 'form2.php'; ?>
                        
                      </div>
                      <div id="step-3">
                        <?php include 'form3.php'; ?>
                        
                      </div>
                      <div id="step-4">
                        <h2 class="StepTitle">Step 4 Content</h2>
                        
                      </div>
                      <div id="step-5">
                        <h2 class="StepTitle">Step 5 Content</h2>
                        
                      </div>
                      <div id="step-6">
                        <h2 class="StepTitle">Step 6 Content</h2>
                        
                      </div>
                      <div id="step-7">
                        <h2 class="StepTitle">Step 7 Content</h2>
                        
                      </div>

                    </div>
                    <!-- End SmartWizard Content -->
                    
                  


                    </div>
                  
                  </div>
                  </div>
                </div>
              </div>

              
      </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="warning" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">คำเตือน</h4>
        </div>
        <div class="modal-body">
          <h4>คุณกำลังออกจากหน้านี้!</h4>
          <p>ข้อมูลสมาชิกจะถูกละทิ้ง คลิก"ออกจากหน้านี้"เพื่อยืนยันการละทิ้ง หรือ คลิก"อยู่ในหน้านี้"เพื่อดำเนินการเพิ่ทสมาชิกต่อ</p>
        </div>
        <div class="modal-footer">
          <a href="home-list.html"><button type="button" class="btn btn-danger">ออกจากหน้านี้</button></a>
          <button type="button" class="btn btn-default" data-dismiss="modal">อยู่ในหน้านี้</button>
        </div>
      </div>
      
    </div>
  </div>
  <!--/end Modal -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

    <script>
      $(document).ready(function(){
      $('body').append('<div id="toTop" class="btn btn-default"><span class="glyphicon glyphicon-chevron-up"></span> กลับไปข้างบน</div>');
      $(window).scroll(function () {
      if ($(this).scrollTop() != 0) {
        $('#toTop').fadeIn();
      } else {
        $('#toTop').fadeOut();
      }
    }); 
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});

    </script>
  </body>
</html>