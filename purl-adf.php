<?php
 
function composeADF($visitor, $subject) {
     
    $name = $subject;
    $vendor = 'Dealer Name';
    $comments = '';
     
    $purladf = '<?xml version="1.0" encoding="UTF-8"?>
                <?adf version="1.0"?>
                <adf><prospect> 
                <requestdate>'.date('c').'</requestdate>';
  
    //You'll want to update these to the proper custom fields IDs, in your Purlem account  
    $purladf .= '<vehicle>             
                    <year>'.$visitor->contacts_cf_1.'</year>
                    <make>'.$visitor->contacts_cf_2.'</make>
                    <model>'.$visitor->contacts_cf_3.'</model>   
                </vehicle>';
                 
    $purladf .= '<customer>
                    <contact>
                        <name part="first">'.$visitor->firstName.'</name>
                        <name part="last">'.$visitor->lastName.'</name>
                        <phone>'.$visitor->phone.'</phone>
                        <email>'.$visitor->email.'</email>
                        <address type="home">
                            <street line="1">'.$visitor->address.'</street>
                            <city>'.$visitor->city.'</city>
                            <regioncode>'.$visitor->state.'</regioncode>
                            <postalcode>'.$visitor->zip.'</postalcode>
                        </address>
                    </contact>
                    <comments>'.$comments.'</comments>
                </customer>';
             
    $purladf .= '<vendor>
                    <vendorname>'.$vendor.'</vendorname>
                </vendor>';
     
    $purladf .= '<provider>
                     <name part="full">'.$name.'</name>
               </provider>';
                 
                     
    $purladf .= '</prospect></adf>';
     
     
    return $purladf;
}