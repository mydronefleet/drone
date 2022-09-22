<?php 
echo "<h2>BAO EXPIRY Warning</h2>";


include_once('inc/quickbase.php');//include the api file
include_once('inc/sendwarningemailtouser.php');//include for sending the email
global $config;
  //Variables to hold our account info
  $qbUser     = 'nits.bisht@gmail.com';
  $qbPassword = 'Quarantine2020@$';
  $qbAppToken = 'c3mgfc4bt63fwzcnxxrrjd924hgg';
  $user_token='b3nexg_gcjc_dhct7vfb7kd8x9cg9jzsbsmidbg';
 
  $qb = new QuickBase($qbUser, $qbPassword, $user_token, true, 'bjswgxnum', $qbAppToken, 'ibac', '24');
  //$qb2 = new QuickBase($qbUser, $qbPassword, $user_token, true, 'bm7hcw3zn', 'cdnh6mkbsdr6mtcefk6w4gegag5', 'ibac', '24');

 

//Get all the AUditors whose validity date is less than this date
$DateTovalidatewith = new DateTime();
$DateTovalidatewith->modify("last day of current month + 6 month");
echo $FormatedDateTovalidatewith="08-31-2022";

//Later will set the date range

$queries = array(
  array(
    'fid'  => '19',
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
  //echo "$arrallexpiredauditors[auditor_s_name] ~".$validity;

   //echo $validity;
   //echo "<br/>";

   //Testing
   $auditorfirstname="";
   $nameofauditor=explode(',',$arrallexpiredauditors['auditor_s_name'],3);

   if(count($nameofauditor)==2)
   {
    $auditorfirstname=trim($nameofauditor[1]);
   }
   else if(count($nameofauditor)==3)
   {
    $auditorfirstname=trim($nameofauditor[2]);
   }
 
   
  //echo "$arrallexpiredauditors[auditor_s_name] ~".$validity;
  echo "<br/><br/><br/><br/>".$arrallexpiredauditors['email'];
  //echo "<br/>";
  $id = $arrallexpiredauditors['auditor_id_'];
   
$mailContent = "Dear ".$auditorfirstname.",<br/><br/>
                Our database indicates that your IS-BAO accreditation will be expiring on <b>".$validity."</b>. According to <a href='https://ibac.org/wp-content/uploads/2020/03/IS-BAO%20Auditor%20Accreditation%20-%20APM%208th%20Edition.pdf' target='_blank'> APM 8th Edition </a> 
                you can already proceed with your renewal process at this time and<br/> still keep the same base month of your current expiration date.
                <br/>
                <br/>
                If you intend to renew your accreditation, these are the steps you will need to follow:
                <br/>
                <ul style='list-style-type: disc;' style='margin-left:2%;'>
                        <li>Apply online, providing an updated resume and some information related to your recentaudit experience. You can find the online form <a href='https://tools.ibac.org/is-bao/auditor-application-renewal/$id' target='_blank'>here</a>.
                        </li>
                        <li>Attend both IS-BAO workshops (Fundamentals and Auditing). Please navigate to  <a href='https://ibac.org/events-and-workshops/workshops' target='_blank'>Workshop Schedule</a> for the schedule of IS-BAO workshops and register for the one that best suits you; and
                        </li>
                        <li>
                         Pay the $500 accreditation fee, which can be done <a href='https://tools.ibac.org/is-bao/accreditation-renewal-fees/$id/aud' target='_blank'>here</a> (please note the payment is not required until, after you attend the workshops) established in <a href='https://ibac.org/wp-content/uploads/2020/03/IS-BAO%20Auditor%20Accreditation%20-%20APM%208th%20Edition.pdf' target='_blank'>  APM 8th Edition</a>.
                      </li>
                </ul>
             
                <br/>

                <p>Once I receive your online application, I will verify your compliance with the current auditor <br/>requirements as established in  <a href='https://ibac.org/wp-content/uploads/2020/03/IS-BAO%20Auditor%20Accreditation%20-%20APM%208th%20Edition.pdf' target='_blank'>  APM 8th Edition</a> and work with you on any additional information <br/>I might need to complete the process and issue your new accreditation letter.


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
                <br/><br/><br/><br/><hr/>";
				
				
		
				

   
	//sendemailtouser("sarvansaini999@gmail.com",$auditorfirstname,$validity, $mailContent);

		//My Email
		//sendemailtouser("xmantralastrock@gmail.com",$auditorfirstname,$validity, $mailContent);


		//Production
		//sendemailtouser($arrallexpiredauditors['email'],$auditorfirstname,$validity, $mailContent); 
   
	

 }
}
?>