<?php include ('header.php');?>
<?php
$mahasiswa = query("SELECT * FROM mahasiswa");
$makul = query("SELECT * FROM makul");
$dosen = query("SELECT * FROM dosen");
?>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data KRS</h1>
                    <p class="mb-4">Data KSRS Mahasiswa STMIK Lombok</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data KRS</h6>
                        </div>
                        <div class="card-body">
                            Form KRS
                            <form action="">
                                 Nama Mahaiswa : 
                                <select name="nim">
                                <option value="-">Pilih Mahasiswa</option>
                                <?php
                                foreach ($mahasiswa as $row) {?>
                                    <option value="<?php echo $row["nim"];?>"><?php echo $row["nim"].'-'.$row["nama"];?></option>
                                    <?php }?>
                                </select> <br>
                                Matakuliah : 
                                <select name="makul">
                                <option value="-">Pilih Matakuliah</option>
                                <?php
                                foreach ($makul as $row) {?>
                                    
                                    <option value="<?php echo $row["kdmk"];?>"><?php echo $row["kdmk"].' - '.$row["makul"];?></option>
                                    <?php }?>
                                </select> <br>
                                Dosen : 
                                <select name="dosen">
                                <option value="-">Pilih Dosen</option>
                                <?php
                                foreach ($dosen as $row) {?>
                                    <option value="<?php echo $row["nidn"];?>"><?php echo $row["nama"];?></option>
                                    <?php }?>
                                </select> <br>
                                UTS : <br>
                                UAS : <br>
                                Ruangan : <br>
                                Tahun Ajaran : <br>
                            </form>
                        </div>
                    </div>