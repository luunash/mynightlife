<?php

function getRecentlyPosted($db){
   $sql = "SELECT * FROM events ORDER BY id DESC";
    $query = mysqli_query($db,$sql);
    
    while($res = mysqli_fetch_assoc($query)){

        $date = $res['event_date'];
        $month = null;
        $day = substr($date,8,2);
        $year = substr($date,0,4);

        if(substr($date,5,2) == 01){
            $month = 'January';
        }
        else if(substr($date,5,2) == 02){
            $month = 'February';
        }
        else if(substr($date,5,2) == 03){
            $month = 'March';
        }
        else if(substr($date,5,2) == 04){
            $month = 'April';
        }
        else if(substr($date,5,2) == 05){
            $month = 'May';
        }
        else if(substr($date,5,2) == 06){
            $month = 'June';
        }
        else if(substr($date,5,2) == 07){
            $month = 'July';
        }
        else if(substr($date,5,2) == 08){
            $month = 'August';
        }
        else if(substr($date,5,2) == 09){
            $month = 'September';
        }
        else if(substr($date,5,2) == 10){
            $month = 'October';
        }
        else if(substr($date,5,2) == 11){
            $month = 'November';
        }
        else if(substr($date,5,2) == 12){
            $month = 'December';
        }

        echo '
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                <div class="tm-home-box-2">						
                    <img src="img/'.$res['event_pic'].'" alt="image" style="height:250px;width:300px;" class="img-responsive">
                    <h3 class="text-center"><b>'.$res['event_name'].'</b></h3>
                    <p class="tm-date text-center"><b>'.$day.' '.$month.' '.$year.'</b></p>
                    <div class="tm-home-box-2-container">
                        <a href="index.php?like='.$res['id'].'" class="tm-home-box-2-link">'.$res['event_like'].'<i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
                        <a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description">View</span></a>
                        <a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
                    </div>
                </div>
            </div>';
    }
    
}

function getPopularEvents($db){
    
}



?>