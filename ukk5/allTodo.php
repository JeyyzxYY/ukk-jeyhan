<div class="card border-1 border-warning shadow-lg">
    <div class="card-body">
        <h4 class="text-center">TodoList</h4>
        <ul class="list-group">
            <?php 
            $sql = "SELECT * FROM todolist";
            $result = $con->query($sql);
            while ($data = $result->fetch_array()) { ?>
            <li class="list-group-item border-bottom border-warning">
                <div class="row justify-content-between">
                    <div class="col-md-9 text-start">
                        <?php if($data['status']=== 'selesai') {  ?>
                            <span class="fw-bold position-relative"><?=$data['taskname'] ?>
                            <i class="position-absolute top-0 start-100 badge bg-success fa-solid fa-check" style="margin-left: 10px;"> </i> <br>
                         </span>
                        <?php }else {?>
                            <span class="fw-bold position-relative"><?=$data['taskname'] ?>
                            <i class="position-absolute top-0 start-100 badge bg-danger fa-solid fa-xmark" style="margin-left: 10px;"> </i> <br>
                         </span>
                        <?php }?>
                        <span class="text-capitalize fw-normal span-date badge bg-primary">Date: <?= $data['tanggal']?></span> |
                        <?php if($data['prioritas'] === 'tinggi') {?>
                             <span class="text-capitalize fw-normal span-date badge bg-danger"><?= $data['prioritas']?></span>
                        <?php }elseif ($data['prioritas'] === 'sedang') {  ?>
                            <span class="text-capitalize fw-normal span-date badge bg-warning"><?= $data['prioritas']?></span>
                
                        <?php }elseif ($data['prioritas'] === 'rendah') {  ?>
                            <span class="text-capitalize fw-normal span-date badge bg-success"><?= $data['prioritas']?></span>
                        <?php }?>
                    </div>
                    <div class="col-md-3 text-end">
                        <a class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditTodo<?=$data['id'];?>"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="fungsiCRUD.php?hapus=<?= $data['id'] ?>" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                        <a href="fungsiCRUD.php?complete=<?= $data['id'] ?>" onclick="return confirm('Apakah Anda Telah Menyelesaikan Tugas ini?')" class="btn btn-sm btn-success"><i class="fas fa-check-circle"></i></a>
                        <a href="fungsiCRUD.php?not_complete=<?= $data['id'] ?>" onclick="return confirm('Apakah Anda Belum Menyelesaikan Tugas Ini?')" class="btn btn-sm btn-dark"><i class="fa fa-close"></i></a>
                    
                    </div>
                </div>
                <?php include "formEditTodo.php" ?>
                <?php include "selesai.php" ?>

            </li>
            <?php }?>
        </ul>
    </div>
</div>