<section class="team">
    <div class="container">
        <h1 class="heading1">OUR TEAM</h1>
        <div class="row">


            <?php
            $query = "SELECT * FROM team";
            $result = mysqli_query($con, $query);
            //$noOfRow = mysqli_num_rows($result);
            foreach ($result as $item) :
            ?>

                <div class="col-md-4 profile text-center border">
                    <div class="team-img-box">
                        <img src="<?php echo $item['memberImage'] ?>" class="img-responsive w-100" style="height:350px">
                        <ul>
                            <a href=" #">
                                <li><i class="fa fa-facebook"></i></li>
                            </a>
                            <a href="#">
                                <li><i class="fa fa-twitter"></i></li>
                            </a>
                            <a href="#">
                                <li><i class="fa fa-linkedin"></i></li>
                            </a>
                        </ul>
                    </div>
                    <h2><?php echo $item['memberName'] ?></h2>
                    <h2><?php echo $item['memberTitle'] ?></h2>
                    <h3><?php echo $item['memberEmail'] ?></h3>
                    <p>Student of Ahsanullah University of Science and Technology</p>
                </div>

            <?php
            endforeach;
            ?>



        </div>
    </div>
</section>