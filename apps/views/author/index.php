<div class="container border mb-3 mt-3">
 <div class="row">
        <table class="table table-bordered table-striped">
        <thead class="table-dark"> 
            <tr> 
                <th> S.No</th>
                <th> User Name</th>
                <th> Full name</th>
                <th> Mobile</th>
            </tr>
        </thead>
    <tbody>
        <?php
        $index=0;
        foreach($data as $info) { ?>
    <tr>
        <td><?=++$index;?></td>
        <td><?=$info['username'];?></td>
        <td><?=$info['fullname'];?></td>
        <td><?=$info['mobile'];?></td>
        </tr>
    </div>

    <?php }  ?>
    </tbody>
    </table>
 </div>
</div>

