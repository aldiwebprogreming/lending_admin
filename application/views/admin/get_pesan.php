<?php foreach ($get_message as $data) {
?>
 <a href="<?= base_url() ?>Message/detail_message?id=<?= $data['id'] ?>" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= base_url() ?>assets/dist/img/inbox.svg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                 	<?= $data['nama'] ?>
                 	<?php if ($data['status'] == 0) { ?>
                  <span class="float-right text-sm text-primary"><i class="fas fa-star"></i> New</span>
              <?php } else {  ?>
              	 <span class="float-right text-sm text-danger"><i class="fas fa-star"></i> Read</span>
              <?php } ?>
                </h3>
                <p class="text-sm">
                	<?php 
                		$pesan = $data['pesan'];
                		echo substr($pesan, 0,10)."...";
                	 ?>
                		
                	</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> <?= $data['date_post'] ?></p>
              </div>
            </div>
            <!-- Message End -->
          </a>
           <?php } ?>
            <div class="dropdown-divider"></div>
          <a href="<?= base_url() ?>message/message" class="dropdown-item dropdown-footer">See All Messages</a>