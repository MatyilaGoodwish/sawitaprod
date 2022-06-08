<?php include "layout/header.php"?>
<?php include "common.php"; ?>

<?php 
    /**
     * @var talent create a talent object
     */
    $talent = new Talent();
?>
 <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

<div class="container my-4">

<div class="p-3">
    <h2>SAWITA Talent & Casting</h2>
    <p class="lead">registered members status, account approval information.</p>
</div>
<div class="container my-4">

<div class="container">
    <div class="card">
        <div class="card-header bg-info text-white">Statistics</div>
    <div class="card-body">
<?php foreach($talent->total() as $total ): ?>
                    <h5> Total Members : <span class="bg-info border-rounded text-white shadow-sm p-1"> <?=$total['Total']?> </span></h5>
<?php endforeach; ?>
    <p>Film makers, story writers, actors and other members that are registered on the website.</p>
<?php foreach($talent->pending() as $total ): ?>
                    <h5> Pending Approval : <?=$total['Pending']?></h5>
<?php endforeach; ?>
    <p>Your application status for registering an account with SAWITA casting, pending status notifies a newly registered member that their account has been created, and on the list.</p>

<?php foreach($talent->Processing() as $total ): ?>
                    <h5>Currently Processing : <?=$total['Processing']?></h5>
                    <?php endforeach; ?>
    <p>Information gathering or processing status, this means your application has been accepted, and under-review. <b class="text-danger">You will need to login and update your role</b> </p>

<?php foreach($talent->Approved() as $total ): ?>
    <h5>Applied/Scheduled for contact : <span class="bg-success border-rounded shadow-sm text-white p-1"> <?=$total['Done']?> </span></h5>
<?php endforeach; ?>
<p>Applied status, number of applicants approved to be part of the SAWITA casting/production </p>
    </div>
</div>
</div>


<div class="my-4"></div>
 
<table id="members" class="table table-striped table-bordered shadow-sm border" style="width:100%">
<thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Opened date</th>
                <th>Approved</th>
 
            </tr>
        </thead>
        <tbody>
        <?php foreach($talent->get_talent() as $member ): ?>
            <tr>
                <td> <?=$member['firstname']?> </td>
                <td> <?=$member['lastname']?> </td>
                <td> <?=$member['created']?>  </td>
                <td> <?=$member['approved']?>  </td>
            </tr>   
        <?php endforeach; ?>
        </tbody>
</table>
   
      
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#members').DataTable();
    });
</script>

<?php include "layout/footer.php" ?>