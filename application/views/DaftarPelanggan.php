<section class="wrapper">
<div  style="padding: 1% 5% 3% 3%;">
    <div class='block-header'>
        <h3><i class="fa fa-angle-right"></i> Daftar Pelanggan</h3>
        <hr>
    </div>
    <!-- Basic Vaalidation -->
           
                <?php
                    $notifikasi = $this->session->flashdata('notif');
                    if($notifikasi != null){
                        echo '<div class="alert alert-danger">'.$notifikasi.'</div>';
                    }
                ?>
            <div class="body">
                <form action="<?php echo base_url('index.php/Pelanggan/SendDataPelanggan')?>" method="post" class="form_validation">
					<div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Nama Pelanggan</label>
                            <input type="text" class="form-control" name="NamaPelanggan">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <label class="form-label">No Telpon</label>
                            <input type="text" class="form-control" name="NoTelp">
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="Username">
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="Password">
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Description</label>
                            <textarea name="Alamat" cols="30" rows="3" class="form-control no-resize" ></textarea>
                        </div>
                    </div>
                    <button class="btn btn-theme" type="submit">SUBMIT</button>
                </form>
            </div>

        </div>
    </div>
</div>
</section>