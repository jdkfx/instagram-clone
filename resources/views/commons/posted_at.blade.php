<?php   //時間の差分を求める
    $postedAt = new \Carbon\Carbon($content->created_at);
    $now = \Carbon\Carbon::now();
    $secondsSincePosted = $postedAt->diffInSeconds($now);
    if($secondsSincePosted > 59){
        $minutesSincePosted = $postedAt->diffInMinutes($now);
        if($minutesSincePosted > 59){
            $hoursSincePosted = $postedAt->diffInHours($now);
            if($hoursSincePosted > 23){
                $daysSincePosted = $postedAt->diffInDays($now);
                if($daysSincePosted > 6){
                    $yearsSincePosted = $postedAt->diffInYears($now);
                    if($yearsSincePosted > 0){
                        echo $postedAt->format("Y年n月j日");
                    }else{
                        echo $postedAt->format("n月j日");
                    }
                }else{
                    echo $daysSincePosted.'日前';
                }
            }else{
                echo $hoursSincePosted.'時間前';
            }
        }else{
            echo $minutesSincePosted.'分前';
        }
    }else{
        echo $secondsSincePosted.'秒前';
    }
?>