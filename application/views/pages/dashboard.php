<div class="content-wrapper">
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row pt-4">
        <?php
				$this->load->view('element/totalReview.php');
				?>
      </div>


      <div class="row">
        <?php
				$this->load->view('element/report.php');
				?>
      </div>

      <div class="row">
        <?php
				$this->load->view('element/chart_1.php');
				$this->load->view('element/chart_2.php');
				$this->load->view('element/productRate.php');
				$this->load->view('element/storeRate.php');
				?>
      </div>

      <div class="row">
        <?php
				$this->load->view('element/lastOrder.php');
				?>
      </div>


      <div class="row">
        <?php
				$this->load->view('element/mini_chat.php');
				?>
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

