 <div class="container-fluid">
   <?php Flasher::flash() ?>
   <h1 class="mt-4">myPortofolio</h1>
   <table class="table table-striped">
     <thead>
       <tr>
         <th scope="col">no</th>
         <th scope="col">stockCode</th>
         <th scope="col">avgBuy</th>
         <th scope="col">lot</th>
         <th scope="col"> lastPrice </th>
         <th scope="col"> %</th>
         <th scope="col"> gain/loss</th>

         <th scope="col">value</th>
         <th scope="col">broker</th>



         <th scope="col">action</th>
       </tr>
     </thead>
     <tbody>
       <?php $no = 1;
        $totalValue = 0;
        $totalGainLoss = 0; ?>
       <?php foreach ($data["portofolio"] as $i) : ?>
         <tr>
           <th scope="row"><?= $no; ?></th>
           <td><?= $i['stockCode']; ?></td>
           <td><?= $i['avgBuy']; ?></td>
           <td><?= $i['lot']; ?></td>
           <td><?= $i['lastPrice']; ?></td>
           <td>
             <?php $percentage = ($i['lastPrice'] - $i['avgBuy']) * 100 / $i['avgBuy']  ?>
             <?= number_format($percentage, 2, '.', ''); ?>
           </td>
           <td>
             <?php $gain = ($i['lastPrice'] - $i['avgBuy']) * 100 * $i['lot']; ?>
             <?= number_format($gain, 0); ?>

           </td>
           <?php $value = $i['lot'] * $i['lastPrice'] * 100; ?>
           <td><?= number_format($value, 0); ?> </td>

           <td><?= $i['stockBroker']; ?></td>
           <td>

             <a type="button" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data');" href="<?= BASEURL; ?>home/delete/<?= $i['id']; ?>">
               X
             </a>


           </td>

         </tr>
         <?php $no++;
          $totalValue += $value;
          $totalGainLoss += $gain ?>
       <?php endforeach; ?>
       <<?php $totalPercentage = $totalGainLoss * 100 / $totalValue; ?> <tr>
         <td scope="row"> Total </td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td> <?= number_format($totalPercentage, 2, '.', ''); ?> %</td>
         <td><?= number_format($totalGainLoss, 0); ?></td>
         <td><?= number_format($totalValue, 0); ?></td>
         <td></td>

         </tr>

     </tbody>
   </table>

   <div class="container">
     <div class="row">

       <a href="<?= BASEURL; ?>home/insert" class="btn btn-outline-primary"> addStock</a>


     </div>
   </div>
 </div>









 </div>
 <!-- /#page-content-wrapper -->