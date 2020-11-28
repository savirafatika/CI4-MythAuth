<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800">Users List</h1>

   <div class="row">
      <div class="col-lg-8">
         <table class="table">
            <thead>
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>
                  <th scope="col">Action</th>
               </tr>
            </thead>
            <tbody>

               <?php $i = 1; ?>
               <?php foreach ($users as $u) : ?>
                  <tr>
                     <th scope="row"><?= $i++; ?></th>
                     <td><?= $u->username; ?></td>
                     <td><?= $u->email; ?></td>
                     <td><?= $u->name; ?></td>
                     <td>
                        <a href="<?= base_url('admin/' . $u->userid); ?>" class="btn btn-info btn-sm">Detail</a>
                     </td>
                  </tr>
               <?php endforeach; ?>

            </tbody>
         </table>
      </div>
   </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>