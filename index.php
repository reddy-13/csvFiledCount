<?php
$file = fopen("us_csv.csv","r");
echo "<pre>";
$i = 0;
                $numberOfFields = 7; // colums number
                $csvArr = array();
                
                while (($filedata = fgetcsv($file, 10, ",")) !== FALSE) {
                    $num = count($filedata);
                    if($i > 0 && $num == $numberOfFields){ 
                        // $csvArr[$i]['names'] = $filedata[0];
                      print_r($filedata);

                        // $csvArr[$i]['email'] = $filedata[1];
                        // $csvArr[$i]['phone'] = $filedata[2];
                        // $csvArr[$i]['created_at'] = $filedata[3];
                    }
                    $i++;
                }
                fclose($file);
                $count = 0;
                foreach($csvArr as $userdata){
                  // print_r($userdata);
                    // $students = new StudentModel();
                    // $findRecord = $students->where('email', $userdata['email'])->countAllResults();
                    // if($findRecord == 0){
                    //     if($students->insert($userdata)){
                    //         $count++;
                    //     }
                    // }
                }
fclose($file);
?>