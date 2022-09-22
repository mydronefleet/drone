<?php 
echo "<h1>BAH EXPIRY Notification</h1>";
include_once('inc/quickbase.php');//include the api file
include_once('inc/sendemailtouser.php');//include for sending the email
global $config;
  //Variables to hold our account info
  $qbUser     = 'nits.bisht@gmail.com';
  $qbPassword = 'Quarantine2020@$';
  $qbAppToken = 'c3mgfc4bt63fwzcnxxrrjd924hgg';
  $user_token='b3nexg_gcjc_dhct7vfb7kd8x9cg9jzsbsmidbg';
 
//$qb = new QuickBase($qbUser, $qbPassword, $user_token, true, 'bm7hcw3zn', $qbAppToken, 'ibac', '24');
$qb = new QuickBase($qbUser, $qbPassword, $user_token, true, 'bm7hcw3zn', 'cdnh6mkbsdr6mtcefk6w4gegag5', 'ibac', '24'); 


//Get all the AUditors whose validity date is less than this date
$DateTovalidatewith = new DateTime();
$DateTovalidatewith->modify("last day of current month");
$FormatedDateTovalidatewith=$DateTovalidatewith->format("m-d-Y");
echo $FormatedDateTovalidatewith = "02-28-2022";
//Later will set the date range

$queries = array(
  array(
    'fid'  => '22',
    'ev'   => 'EX',
    'cri'  => $FormatedDateTovalidatewith
  )
);

//Is BAO
$add = $qb->do_query($queries, 0, 0, 'a', 0, '', '');
$arr = array();

foreach($add->record as $record){	    

        $arr[]= $record;
 
     }
    
//Get the Current Date Of the server
if (count($arr)>0) {

 //echo "i am called successfully by cron job";
 foreach ($arr as $value) {
  
    foreach($value as $key => $val) 
    {
      $arrallexpiredauditors[$key] = "{$val}";
   }

  //Uncomment for Priting the Result
  $validity = substr($arrallexpiredauditors['validity'],0,-3);
  $valid = new DateTime("@$validity");
  $validity = $valid->format("d-M-Y");
  //echo $validity;
  echo "<br><br><br><br>$arrallexpiredauditors[email] ";
  //echo "<br/>";
  //echo $arrallexpiredauditors['email'];
  $id = $arrallexpiredauditors['record_id_'];
$mailContent = "Dear ".$arrallexpiredauditors['first_name'].",<br/><br/>
                Our database indicates that your IS-BAH accreditation expired on <b>".$validity."</b>. According  to  <a href='http://sky.ibac.org/wp-content/uploads/2018/08/IS-BAH-Auditor-Requirements_APM.pdf' target='_blank'>IS-BA APM 8th Edition – Chapter 2 and Appendix G,</a> you can renew your accreditation  within the next 6 months and keep the same base month of your current expiration date.
                <br/>
                <br/>
				If you intend to renew your accreditation, these are the steps you will need to follow:
                <ul style='list-style-type: disc;' style='margin-left:2%;'>
                <li>Apply online, providing an updated resume and some information related to your recent  audit experience. You can find the online form <a href='https://tools.ibac.org/is-bah/auditor-application-renewal/$id' target='_blank'>here</a>.
                </li>
                <li>Attend both IS-BAH workshops (Fundamentals and Auditing). Please navigate to the <a href='https://ibac.org/events-and-workshops/workshops' target='_blank'>Workshop Schedule</a> for the schedule of IS-BAH workshops and register to the one that best suits you; and
                
                </ul>
             
                <br/>

                <p>Once I receive your online application, I will verify your compliance with the current auditor <br/>requirements as established in <a href='http://www.sky.ibac.org/wp-content/uploads/2018/08/IS-BAH-Auditor-Requirements_APM.pdf' target='_blank'> IS-BA APM 8th Edition – Chapter 2 and Appendix G,</a><br/> and work with you on any additional information I might need to complete the process and issue<br/>
					your new accreditation letter.</p>

                <p>Please let me know if I can be of any assistance.</p>

                <br/>
                Yvonne Marinus<br/><br/><br/> 
                <b>Auditor Accreditation Manager</b><br/>
              
                International Business Aviation Council, Ltd<br/>
                Mobile/ Intnl.WhatsApp: +1 (650) 302-8306<br/>
                E-mail: ymarinus@ibac.org
                <br/>
                <br/>
                <img src='https://drive.google.com/a/ibac.org/uc?id=0B02lu1Xf40qAcTU4RDBTQWhsckE&export=download' style='margin-left:-3%;'/>
                <br><br><br><br><hr/>";

   
   //Testing
   //sendemailtouser("sarvansaini999@gmail.com",$auditorfirstname,$validity,$mailContent);

   //
   //sendemailtobahuser("xmantralastrock@gmail.com",$arrallexpiredauditors['first_name'],$validity, $mailContent);


   //Production
   //sendemailtouser($arrallexpiredauditors['email'],$arrallexpiredauditors['first_name'],$validity, $mailContent);
   	
}


}
?>