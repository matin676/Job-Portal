<?php include 'header.php' ?>
<?php include 'config.php' ?>

<div class="col py-3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Candidate Name</th>
                <th scope="col">Position</th>
                <th scope="col">Year Passout</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql="Select name,apply,year from candidates";
            $result=mysqli_query($conn,$sql);
            $i=0;
            if ($result->num_rows>0) {
                while($rows=$result->fetch_assoc()){
                    echo'        
            <tr>
            <th scope="row">'.++$i.'</th>
            <td>'.$rows['name'].'</td>
            <td>'.$rows['apply'].'</td>
            <td>'.$rows['year'].'</td>
            </tr>';
                }
            }else{
                echo"";
            }
            ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>