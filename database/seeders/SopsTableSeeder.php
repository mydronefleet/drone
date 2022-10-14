<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SopsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sops')->delete();
        
        \DB::table('sops')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'SOP Purpose, Author, and Credits',
                'name' => NULL,
                'document' => NULL,
            'content' => '<p><b>Purpose</b><br><br>This SOP describes best practices of UAV use for general commercial, public safety, or governmental operations. Through careful adherence to these procedures an organization, agency, or single pilot operator will boost efficiency, reduce risk and errors, as well as ensure regulatory and safety standard compliance. This document is not a comprehensive work on the rapidly advancing technological subject. However, the information and references contained herein will serve as a foundation for the establishment of a safety conscious and regulatory compliant UAV based operation.<br><br><b>About the Author<br></b><br>Steve is a Certified Flight Instructor and commercial pilot. He is qualified by the FAA to teach aviation subjects to all students from drone pilots to multi engine instrument rated commercial pilots and flight instructors. He graduated with an AS degree in Criminal Justice and BS degree as a Professional Pilot and is currently pursuing a Masters of Systems Engineering program. He deployed as a civilian contractor with AAI Textron operating the RQ-7 Shadow in support of operations in Iraq and Afghanistan. As a former production test pilot of RQ-4 Global Hawk variants and other aircraft for industry leader Northrop Grumman and National Test Pilot School RPA short course graduate, he developed systems integration and flying qualities knowledge that serve the subject at hand. Now as a multi-business owner, he now works to further airborne implementation and advancements that build infrastructure, protect the public, and save lives.<br><br><b>Credits</b><br><br>This document was produced and written by <b>Steven Melander (CFI 3301973) of Melander Aviation, LLC</b>. Its use is solely for intended clients of the aforementioned or their subsidiaries. This document is not for sale or dissemination without express written permission of Melander Aviation, LLC. Copyright © 2022 Steven Melander as per United States Copyright office, a division of the Library of Congress.</p>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            1 => 
            array (
                'id' => '2',
                'title' => 'Appendix D CRM Hazardous Attitudes',
                'name' => NULL,
                'document' => NULL,
                'content' => '<center><img src=\'public/img/FiveHazardousAtt.png\'></center><a href=\'public/img/FiveHazardousAtt.png\' target=\'_blank\'>View the 5 Hazardous Attitudes here</a><br><br>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            2 => 
            array (
                'id' => '3',
                'title' => 'Appendix C UAS Requirement Table',
                'name' => NULL,
                'document' => NULL,
                'content' => '<p>UAS Requirement Table</p>
<center><img src=\'public/img/UASRequirement.png\'></center><a href=\'public/img/UASRequirement.png\' target=\'_blank\'>View the UAS Requirements here</a><br><br>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            3 => 
            array (
                'id' => '4',
                'title' => 'Appendix B LEO Incident Reports',
                'name' => NULL,
                'document' => NULL,
                'content' => '<p>LEO Drone Incident Report</p>
<center><img src=\'public/img/LEOIncidentReport.png\'></center><a href=\'public/img/LEOIncidentReport.png\' target=\'_blank\'>View the LEO Report here</a><br><br>
<center><img src=\'public/img/FAAIncidentReport.png\'></center><a href=\'public/img/FAAIncidentReport.png\' target=\'_blank\'>View the FAA Report here</a><br><br>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            4 => 
            array (
                'id' => '5',
                'title' => 'Appendix A ACS',
                'name' => NULL,
                'document' => NULL,
                'content' => '<p><b>ACS</b><br><br>The ACS is based on the following 14 CFR parts, FAA guidance documents, and other documents.<br></p>
<center><img src=\'public/img/ACS.png\'></center><a href=\'public/img/ACS.png\' target=\'_blank\'>View the ACS table here</a><br><br>
<p> Users should reference the current edition of the reference documents listed above. Safety Alerts for Operators (SAFOs) and the current edition of all FAA publications is located at the FAA’s website. </p>
</div>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            5 => 
            array (
                'id' => '6',
                'title' => 'Hazmat',
                'name' => NULL,
                'document' => NULL,
            'content' => '<p>A sUAS is prohibited from carrying hazardous material as defined in 49 CFR § 171.8:<br><br>Hazardous material means, “a substance or material that the Secretary of Transportation has determined tis capable of posing an unreasonable risk to health, safety, and property when transported in commerce, and is designated as hazardous under section 5103 of Federal hazardous materials transportation law&nbsp;(49 U.S.C. 5103). The term includes hazardous substances, hazardous wastes, marine pollutants, elevated temperature materials, materials designated in the Hazardous Materials Table (see 49 CFR § 172.101), and materials that meet the defining criteria for hazard classes and divisions in part 173 of subchapter C of this chapter.” <br><br>Note: Lithium batteries that are installed in an sUAS for power during the operation are not considered hazardous material under part 107. However, spare (uninstalled) lithium batteries would meet the definition of hazardous material and may not be carried as cargo on the UAS.<br></p>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            6 => 
            array (
                'id' => '7',
                'title' => 'Operational
Risk Management',
                'name' => NULL,
                'document' => NULL,
                'content' => '<p>This is a preflight process used to minimize and mitigate risk. An objective approach to risk will result in maximizing safety and minimize loss.<br><br><br></p>
<ul>
<li>Analyze the mission by reviewing the plans, tasks, requirements, and conditions of the proposed operation in chronological order and list anticipated major events.</li>
<li>List the hazards through reviewing each event or sequence of tasks for hazards. Involve others to ask “what if” this or that went wrong. Identification of ALL hazards is crucial to controlling the outcome.</li>
<li>Assess the hazards for risk of loss based on severity of results. Normally a grading scale of 1 to 4 (with 1 being highest) is used to map the severity of a hazard\'s impact.</li>
<ol type=\'I\'>
<li>Catastrophic- resulting in death, permanent injury, substantial loss</li>
<li>Critical- resulting in permanent partial disability, hospitalization, or loss</li>
<li>Marginal – resulting in injury, or damage that is repairable but with difficulty</li>
<li>Negligible – resulting in minor injury or illness or easily repairable damage</li>
</ol>
<li>Evaluate the probability of each hazard occurring. This has been traditionally done with a ranking of A through E</li>
<ol type=\'A\'>
<li>Frequent- likely to occur often</li>
<li>Probable- will occur frequently</li>
<li>Occasional- will occur several times</li>
<li>Remote- unlikely but can reasonably be expected to occur</li>
<li>Improbable- unlikely to occur but possible</li>
</ol>
<li>Determine root cause and make a list of the causes associated with each hazard.</li>
<li>Implement controls or mitigation procedures that keep the severity and possibility of hazards from being influential on outcome</li>
<li>Finally supervise those controls for effectiveness, capture lessons learned, and improvements to process.</li>
</ul>
<p> Most military organizations utilize some type of grading scale to each foreseen hazard. Plans are made to reduce or eliminate the hazards effect on mission success.<br><br></p>
<p>
</p>
<center><img src=\'public/img/RiskAssessmentMatrix.png\'></center><a href=\'public/img/RiskAssessmentMatrix.png\' target=\'_blank\'>View the Rist Assessement Matrix here</a><br><br>
<p> This process can be applicable to sUAS operations by incorporation of the IM SAFE checklist, required documentation possession, weather analysis, maintenance history, pilot recency of experience/currency, CRM, mission operational objective importance, or any other considerations the RPIC sees fit to include. As the totality of operational circumstances are included in the ORM assessment, the safety habits of the RPIC will increase. </p>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            7 => 
            array (
                'id' => '8',
                'title' => 'Upcoming Regulatory Changes',
                'name' => NULL,
                'document' => NULL,
                'content' => '<p>As of April 21, 2021, part 107 RPIC’s DO NOT require a waiver to operate at night, over people, or from a moving vehicle as long as they meet the requirements defined in the new rule. Airspace authorizations are still required for night operations in controlled airspace under 400 ft.<br><br><b>Remote ID</b><br>Use of ATC transponders and ADS-B out is prohibited under part 107<br><br>Before operating a remote ID equipped aircraft, the operator must ensure the UA serial number is listed on the FAA-accepted declaration of compliance AND the registration for the UA has been updated to include the serial number of the standard UA or broadcast module being operated. The FAA’s website provides a service for an operator to look up their UA serial number to confirm its listing on an FAA-accepted DoC.<br><br>The RPIC must ensure the UA is broadcasting remote ID messages “from takeoff to shutdown”</p>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            8 => 
            array (
                'id' => '9',
                'title' => 'Accident Reporting',
                'name' => NULL,
                'document' => NULL,
                'content' => '<p>The RPIC must report any sUAS accident to the FAA <b>within 10 calendar days</b> of the operation if the following thresholds are met:</p>
<ul>
<li><b>Serious injury</b> to any person or any loss of consciousness</li>
<ul>
<li>Defined as head trauma, broken bones, lacerations to the skin that requires suturing</li>
</ul>
<li><b>Damage</b> to any property, other than the sUAS, if the cost is greater than $500 to repair or replace the property (whichever is lower)</li>
</ul>
<p> This report should be filed electronically at https://dronezone.faa.gov, and this site has further details about the required information for the report.<br><br>The RPIC must report any sUAS accident to the NTSB <b>immediately </b>in which:</p>
<ul>
<li>Any person suffers death or serious injury</li>
<li>An aircraft with a max gross weight of 300 lbs or more sustains substantial damage</li><br>
</ul>
<p> See 49 CFR part 830 for specific definitions and details </p>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            9 => 
            array (
                'id' => '10',
                'title' => 'Aircraft: Section 10 – Safety Tips',
                'name' => NULL,
                'document' => NULL,
                'content' => '<p>The following are some tips which may augment the safety of an operation but are not known to be widely used among part 107 operators. For RPICs that also have a part 61 certification these will be familiar. Consider researching and implementing these into applicable operations.<br></p>
<ul>
<li>Manned pilots have websites and apps that make flight planning and situational awareness much easier. By far one of the most widely used of these is ForeFlight. This subscription-based app provides a myriad of features unknown and/or unnecessary to the sUAS pilot. However, some highly applicable features can offer direct assistance to the RPIC during preflight and in flight. At least some of those are: position, airspace, near real time weather, NOTAMs, TFRs, applicable communications frequencies and phone numbers.</li>
<li>Manned pilots communicate with each other and ATC, over VHF frequencies. They also tune to specific frequencies to hear prerecorded weather information for almost all airports. Consider buying a hand-held aviation radio and listening on appropriate frequencies while operating in proximity to manned aircraft. This recommendation comes with a serious caveat. Any use of such a radio should be accompanied by thorough training by a Certified Flight Instructor and its being used to transmit curtailed in most circumstances.</li>
<li>Utilize web-based or app-based maintenance/logging and notification services. Find one that tracks currency and type of pilot experience and aircraft service records. Often the more it can track or record, the better, when it comes to liability mitigation. This can be worth it for battery longevity alone when you get a notification that an aircraft battery hasn’t been used in so long its current charge level has dropped to the point of irreversible damage.</li>
<li>Communication between members of the flight crew is vital. Consider using a number of 2 way radios as a backup to a 3 (or more) way conference call. This is one more way of adding redundancy and being prepared for failure. Remember that having such tools may be useless if training and practice for what to say and when to say it, has not taken place.</li>
<li>Develop a set of personal minimums. This is also a concept drawn from manned aviation. This means for example when the FAAs visibility requirement for operations is 3 statute miles, but due to the RPICs lack of recent experience or any other increased risk factor, the RPIC elects to reduce the limitation to 2 statute miles for them at that time. This voluntary method of increasing the restrictions for an operation or operator will further decrease risk, thereby increasing safety factor. In the event a regulation does not exist on a particular subject, it is the RPICs prerogative to establish and abide by one.</li>
<li>Consider what manned aviation assets may be operating at altitudes less than 400 feet AGL in your area of operations. In most suburban areas law enforcement or medical helicopters could be operating without notice in metropolitan areas (again a potential reason to have a handheld VHF radio). Also crop dusting or mosquito abatement operations occur at near ground level. Take time to become familiar with such operations and obtain methods of contacting businesses or agencies to inquire if they will be in your operational area. Hearing or seeing an airplane just above treetops with enough time to take evasive action may be impossible.</li>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            10 => 
            array (
                'id' => '11',
                'title' => 'Aircraft: Section 9 - Supplements',
                'name' => NULL,
                'document' => NULL,
                'content' => ' <p>Please reference all available sources of information from manufactures or certified repair depots for aircraft specific information that will supplement the information herein provided.</p>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            11 => 
            array (
                'id' => '12',
                'title' => 'Aircraft: Section 8 – Maintenance',
                'name' => NULL,
                'document' => NULL,
                'content' => '<p>Scheduled maintenance may be recommended by sUAS manufacturers for system components based on time-in-service limits and/or other factors. Adherence to these recommendations prevents most incidents of catastrophic component damage. If the manufacturer does not provide maintenance instructions, the FAA recommends developing your own protocols. Document maintenance and record time-in-service for components to assess and develop an effective schedule.<br><br>Unscheduled overhaul of a component or software may be deemed necessary as a result of a thorough inspection. In this event, do not conduct flight operations until the discrepancy is corrected and properly documented.<br><br>Repairs that require a higher level of familiarity or skill may occur. It is highly recommended to seek the manufacturers or recommended repairman or mechanics for such affected components. Operating an aircraft that has questionable, or no maintenance inspection history carries with it substantial liability to the RPIC and undue hazardous risk to the public.<br><br>Warning: modifications to aircraft prior to flight outside manufacturers “as sold” or “as recommended” configuration substantially increase risk. Performance as a test pilot to evaluate flight characteristics or methodical envelope expansion should be conducted only by qualified personnel in controlled circumstances and in association with representatives of components and manufacturers.<br><br>System software or component firmware upgrades are a critical part of maintenance programs and should be downloaded, installed and documented in maintenance logs at maintenance intervals and/or preflight inspections when made available by manufacturers. Establish a system of notification and verification of pending available downloads, complete installation, and documentation of software build sequence.<br><br>Caution: Risk of adverse or unexpected aircraft behavior increases if software/firmware updates are ignored or just after new installation. Be attentive and prepared for abnormal sounds, changes to handling or sensitivity to control&nbsp;inputs, command and control link connectivity or range, or abnormal battery consumption or temperatures.<br><br>As aircraft types and maintenance requirements may vary among even the same manufacturer, please refer to your UASs’ manufactures recommendations for specific component maintenance practice recommendations. Pay close attention to motors, propeller/rotor blades, gimbal and payloads, and probably, most importantly, battery health and safety.<br><br>Caution: The most common battery types in the industry are prone to thermal runaway, spontaneous combustion, or even explosion, should they suffer structural damage by dropping or by crashing. Exposure to air or water can lead to fire. Remove overheated, deformed, cracked, or compromised batteries from service.</p>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            12 => 
            array (
                'id' => '13',
                'title' => 'Aircraft: Section 7 – Systems Description',
                'name' => NULL,
                'document' => NULL,
                'content' => '<p>Accelerometers measure a rate of velocity change with reference to a datum. These measured position changes are compared by flight controllers to variations of regulated power drawn by electronic speed controllers for each motor. This feedback loop for given power, or motor RPM is then referenced to GPS position. The flight controller tracks GPS position update information and can adjust its orientation and RPM to maintain directional movement at a planned horizontal velocity between and along planned waypoints, while correcting for the effects of wind and other environmental factors. This is possible due to excessive performance envelope between equilibrium of straight and level unaccelerated flight, and a hardware or software limitation which caps an aspect of capability.<br><br>Radio frequency bands similar to those of WiFi are used to transmit and receive command and control, camara feed, health and status updates, and position information between GCS, and aircraft. Those signals can be augmented through the use of tablet or phone-based applications which decode and present more of the available information for use. These frequency bands are subject to jamming, congestion, distortion, antenna limitations, ect. These factors contribute to a maximum range at which the aircraft and its paired GCS can effectively maintain connectivity.<br><br>Data transmitted from the aircraft to the GCS, known as return link, which consists of the camera feed and payload/aircraft health and status update packets. It is this data that requires the majority of links capacity. Therefore, a GCSs video feed is the first to be interrupted should range or other frequency limitations be placed on the airborne transmitter.<br><br>The RPIC should exercise attention to connectivity throughout the flight and adjust or alter plans should an abrupt or rapid degradation of connectivity be observed. Consideration of the WiFi environment for an urban flight may factor into flight planning differently than a rural flight.</p>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            13 => 
            array (
                'id' => '14',
                'title' => 'Aircraft: Section 6 – Weight and Balance',
                'name' => NULL,
                'document' => NULL,
            'content' => '<p>RPICs should be aware of the consequences of overloading. An overloaded aircraft may not be able to leave the ground or maintain a stable hover. It will likely display poor flight/handling characteristics. The balanced position of center of gravity for a given sUAS is not uniform across all makes or models.<br><br>Caution: When altering the “as built” weight by attaching objects to a sUAS, the RPIC does so at great risk. An inability to calculate the useful load, proper load balancing, and subsequent performance effects both aerodynamically and accurately, with the manufactures (and FAA) approval, will likely result in catastrophic failure.</p>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            14 => 
            array (
                'id' => '15',
                'title' => 'Aircraft: Section 5 - Performance',
                'name' => NULL,
                'document' => NULL,
            'content' => '<p>Performance of aircraft can only be estimated or predicted in stable environments. Atmospheric pressure, humidity, and outside air temperature are the most prominent factors in aerodynamic production of the lift a propeller, rotor, or wing produces and are crucial in the temperature management of motors and batteries. Pilots expect predictable climb and decent rates, horizontal acceleration and deceleration rates, speeds, and endurance characteristics. By paying close attention to these and other handling qualities a RPIC can identify abnormalities, take precautions, and assess their cause before the aircraft is in a more undesirable state, condition, or location. RPICs should remember that as air density decreases performance suffers.<br><br>High weights and high-density altitudes (low air densities) will:</p>
<ul>
<li>Demand higher propeller/rotor speeds to lift the aircraft</li>
<li>Reduce rate of climb</li>
<li>Lower max altitude</li>
<li>Shorten range and endurance</li>
<li>Reduce cruise speed</li>
<li>Reduce maneuverability</li>
<li>Reduce stability</li>
<li>Increase stall speed of propeller/rotor</li>
</ul>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            15 => 
            array (
                'id' => '16',
                'title' => 'Aircraft: Section 4 – Normal Procedures',
                'name' => NULL,
                'document' => NULL,
                'content' => '<div class=\'section4\'><p class=\'c7\'><span class=\'c2\'>These sample checklists can be used or modified according to operational needs.</span></p>
<p class=\'c7\'><span class=\'c9\'>Checklists</span><br><br></p>
<table class=\'c13\'>
<tbody>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c9\'>Flight number/Name</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c9\'>Date/Time:</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Plan/Mission</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c9\'>Crew Names/ORM/IM SAFE</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>1</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>RPIC</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>2</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Co-Pilot (if req’d)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>3</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>VO 1 (if req’d)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>4</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>VO 2 (if req’d)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>5</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Student/Training Pilot/VO (if req’d)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c11\'><span class=\'c9\'>Weather information</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>1</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>%Cloud Cover (ceilings)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>2</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Visibility</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>SM</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>3</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Temperature</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Deg F</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>4</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Wind Direction</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>5</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Wind Intensity/Gust (if applicable)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Kts/Mph</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c9\'>Site Information</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>1</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Airspace type</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>B, C, D, E, G</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>2</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>LAANC approval received (if req’d)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>#</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>3</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>State DOT approval (if req’d)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>#</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>4</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Other notifications (if req’d)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>5</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Checked NOTAMs/TFRs</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>6</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Prox. to nearest airport</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>7</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Prox. to crowds, animals, property</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>8</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Prox. to overhead obstructions</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>9</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>T/O &amp; land/emergency sites ident.</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>10</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Home point ident. and updated</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>11</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Safety signs, cones, PPE, pad placed</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c9\'>Documents</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>1</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>RPIC cert and renewal </span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>In possession</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>2</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>sUAS registration</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>In possession</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>3</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Gov’mt issued photo ID</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>In possession</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>4</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Operational waiver (if applicable)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>In possession</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>5</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>COA (if applicable)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>In possession</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>6</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>DoD (if applicable)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>In possession</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>7</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Aircraft/Pilot logbooks</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Updated</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>8</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Time/Maintenance app</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Synced</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c9\'>Crew Briefing</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>1</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Weather and airspace</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>2</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Comms procedures</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>3</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Flight plan</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>4</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>All Contingencies</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>5</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Take off landing locations</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>6</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Questions/comments</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c9\'>Aircraft/GCS Visual Inspection</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>1</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Gimbal lock and lens </span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Removed cap &amp; clean</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>2</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>A/C Battery inspected</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Contacts and structure</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>3</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>GCS and A/C power</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>On</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>4</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Software/Firmware</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Updated</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>5</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Remote ID Test</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Passed</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>6</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Compass calibrated (if req’d)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>7</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>IMU calibrated (if req’d)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>8</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Inspect frame for cracks, looseness</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Clean</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>9</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Motors spin freely</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>10</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Props/hubs cracks or damage</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Clean</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>11</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Skin delamination/cracking</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Clean</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>12</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Loose hardware/fasteners</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>13</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Loose wires or parts</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>14</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>A/C Batteries fully inserted/locked</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>15</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>GCS/Tablet Battery charge level</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Full</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>16</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>A/C Battery charge level</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Full</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>17</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>A/C battery alerts</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Set per range/winds</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>18</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Max altitude/RTH Altitude</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Set per obstructions</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>19</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Loss Comms/RTH settings</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Home-point or GCS</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>20</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Payload (if applicable)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Secured/armed</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>21</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>A/C lighting (if req’d)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>22</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Memory card</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Installed/adequate</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c9\'>Pre-takeoff </span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>1</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Connectivity/GPS signal strength</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>GCS check</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>2</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Camara settings</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Adjusted</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>3</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>VHF Radio (if req’d)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>4</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>2-way flight crew radio (if req’d)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>5</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Cell phone conference call (if req’d)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>6</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Inform/bystander safety</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>7</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>360-degree airspace check</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Climb/departure clear</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>8</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Time Check</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c9\'>Takeoff and Climb</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>1</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Low hover ops check (if req’d)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Rec. for first flight</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>2</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Manual t/o, land and stop (if req’d) </span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Rec. for first flight</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>3</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Flight plan upload (if applicable)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>4</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>360-degree airspace check</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Climb/departure clear</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>5</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Wind Check</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>6</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Takeoff</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Watch/listen/verify</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>7</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Climb out</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>8</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Scan instruments and sky</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>9</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Position report to crew (if req’d)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c9\'>Enroute/Mission (loop)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Scan instruments and sky</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Position report to crew (if req’d)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c9\'>Decent and Landing</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>1</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>360-degree airspace check</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Approach/decent clear</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>2</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Scan instruments and sky</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>3</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Wind check</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>4</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Position report to crew (if req’d)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>5</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>LZ conditions/security/FOD</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>LZ clear</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>6</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Camera position</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Full Forward</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>7</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Shutdown </span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Auto/stick</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>8</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Shutdown report to crew (if req’d)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>9</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Time</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Check</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>10</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>A/C power</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Off</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>11</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>GCS power </span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Off</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c14\'>Post Flight</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>1</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Airspace release (if req’d)</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>coordinate</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>2</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Crew debriefed</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Lessons learned</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>3</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Aircraft postflight inspection</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>4</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Maintenance discrepancies logged</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>5</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Time/maintenance app</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Synced</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>6</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Batteries inspected and cooled </span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>7</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Batteries charged if stored long</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Above 10%</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
<tr class=\'c6\'>
<td class=\'c4\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>8</span></p>
</td>
<td class=\'c8\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Video/pictures</span></p>
</td>
<td class=\'c10\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c5\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c7\'><span class=\'c2\'>Downloaded</span></p>
</td>
<td class=\'c3\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
<td class=\'c1\' colspan=\'1\' rowspan=\'1\'>
<p class=\'c0\'><span class=\'c2\'></span></p>
</td>
</tr>
</tbody>
</table>
<hr style=\'page-break-before:always;display:none;\'>
<p class=\'c0\'><span class=\'c2\'></span>
<a href=\'public/DroneOpsChecklist.pdf\' target=\'_blank\'>View the Checklist table here</a></p></div>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            16 => 
            array (
                'id' => '17',
                'title' => 'Aircraft: Section 3 – Abnormal and EPs',
                'name' => NULL,
                'document' => NULL,
            'content' => '<p>In case of an in-flight emergency, the RPIC is permitted to deviate from any rule of part 107 to the extent necessary to meet that emergency. Upon written request, the RPIC must send a written report to the FAA explaining the deviation.<br><br>Emergency procedures or EPs should be scenario based and conform to manufacturers recommended actions. All prospective EPs should be discussed and practiced by the crew. An Abnormal or EP checklist should be developed and followed for each situation. Refer to, duplicate, or modify the example EP checklists below.<br><br>Aviation accident studies have revealed a chain of circumstances or decisions, predominantly multiple and sequential in nature, which ultimately are determined to be causal or contributory to the accident. It is very likely that the most critical errors in judgment are poor preparation, lack of adherence to regulation, and misinterpretation of what should be predictable aircraft behavior. Recognize the applicability of preparation and predictability in the following abnormal and emergency events.<br><br><b>ABNORMAL - LOST LINK</b><br>Uplink (commands to aircraft) or downlink (status updates to GCS) failure recognition of the aircraft performing (potentially intermittently) a preset lost link procedure. Normally either stationary hover (if sufficient battery power remains) or an auto Return to Home or RTH. Depending on presets expect an altitude change in conjunction with the lateral return. Immediate Autoland at preselected takeoff and landing point or hover at that point until battery depleted followed by Autoland. If no preset RTH point expect hover in position till the battery is depleted, followed by attempted Autoland in place. Aircraft lost link behavior is determined by preflight settings and can include a predetermined flight path and altitude to a location for hover or landing.<br><br><b>RPIC actions</b> – Once a lost link condition is recognized the RPIC should immediately communicate that condition and the aircrafts expected behavior to other crew members. Maintain visual contact and verify behavior as&nbsp;expected. Troubleshoot link loss caused by checking status of GCS batteries, application, antenna, frequency interference, or cable connectivity. If operating with a tablet or phone attached to GCS, disconnecting from those devices to operate with GCS controller alone. Observe approach and decent path, as well as landing area is clear. Aircraft behavior following a lost link contingency event will be predictable if the RPIC has preset location specific actions during preflight.<br><br><b>ABNORMAL - ALTERNATE LANDING/RECOVERY</b><br>Should a landing at an alternate location become prudent or necessary a crew member should be able to keep the aircraft in sight throughout the approach, decent, landing and shutdown to confirm the path free of obstructions or hazards. During an alternate landing to a site other than the takeoff location or current GCS location, the flight crew should anticipate aircraft behavior consistent with a lost comms event. An unanticipated climb and lateral movement toward the lost coms preset location can be interpreted as a flyaway event. This misconception could be reinforced if the alternate landing site was selected due to strong winds or weather conditions.<br><br><b>RPIC actions</b> – Place the aircraft in a steady state hover and verify commanded behavior. Communicate with crew the decision to move to the pre-identified alternate landing location and move a crew member to that location while maintaining VLOS with the aircraft and its environment. Continue scan of GPS signal, GCS battery C2 signal strength, aircraft battery and connectivity signal strength. Once crew are in place proceed with approach, decent, and landing. Consider changing RTH settings to GCS rather than Home Point, if appropriate.<br><br><b>EP FLIGHT TERMINATION (controlled flight into the ground)</b><br>Termination is the intentional and deliberate process of performing controlled flight into the ground. As such the term “Terminate” or “Termination” should be avoided in crew communications unless such an action should be immediately and expeditiously taken in the RPICs judgment. If such an action is recommended by different crew members with minimal communication in a time critical safety related situation, it should only be a course of action taken according to a crew briefing by the RPIC in the preflight crew briefing. Various pre planned Terminate locations could be selected and conditions warranting such discussed in&nbsp;detail as to avoid confusion. Termination should be used as a last resort. Should the lack of termination likely result in harm to persons or property, or loss of control be imminent, communicating the words “terminate, terminate, terminate,” three times should prompt the RPIC to descend immediately toward the nearest preplanned/pre-surveyed termination site. RPICs should have proximity to site locations, obstructions, and hazards at those locations (winds and altitudes), and post controlled landing actions in mind as a normal flight progresses. Most sUAS have the capability to stop propeller/rotor rotation, even mid-flight, and free fall from their current position and altitude to impact with the surface by moving and holding simultaneously both control sticks to their lowest and innermost stick positions. This is referred to as the “Terminate” position.<br><br><b>RPIC actions</b> – Promptly descend in the direction of the predetermined Termination site while simultaneously communicating effectively with crew members about Termination site location, conditions, suitability. Consider the nature of the threat to safe operations and if possible, halting the termination mid maneuver if appropriate. Once the aircraft is determined to be in position for, and the RPIC decides the maneuver should be continued weighing all repercussions, move controls to the terminate position.<br><br>Caution: Poor preflight planning, briefing, or crew communication with regards to this maneuver can result in an unnecessary termination of the flight and place people or property on the surface at undue risk. It is highly recommended that all crew members be competent and capable of judicious CRM and ADM before practicing for or taking part in an actual termination maneuver.<br><br><b>EP FLYAWAY</b><br>A flyaway is an emergency that may begin as a lost link. During a flyaway the pre-set lost link procedures and aircraft behavior is not being executed. Should a flyaway occur in a LAANC authorized ATC airspace, the aircraft could exit the assigned altitudes and lateral limits and could pose a real threat to manned flight operations. The NTSB requires in Title 49 part 830 immediate notification of any aircraft flight control system malfunction. A flyaway DOES and a lost link DOES NOT qualify as a flight control system (FCS) malfunction. Having the&nbsp;appropriate contact phone numbers readily available prior to flight and briefed is appropriate.<br><br><b>RPIC actions</b> – Immediate notification of ATC is required. Have applicable information available such as last known position/altitude, direction of travel, battery run time remaining, aircraft description, and your contact information. Follow direction of, and cooperate with ATC, FAA, NTSB, and law enforcement officials.<br><br>Warning: A flyaway must be identified as such expeditiously and ATC notifications made promptly as doing so could prevent the loss of life.<br><br><b>EP LOSS OF GPS</b><br>GPS signal loss causes drift due to winds or imbalances in weight. Such drift in position and/or altitude can be so intense as to lead to loss of control and appear as a flyaway. Preventative measures such as checking NOTAMs for known GPS service disruptions, being familiar with and practicing flight without the aid of GPS (often referred to as ATTI or Attitude Mode), and most importantly conceptualizing predictable aircraft behavior even in contingency modes. A consistent habitual scan of GCS indications and aircraft responsiveness to control inputs will minimize delay between the signal failure and identification of the GPS loss.<br><br><b>RPIC actions</b> – Timely recognition of conditions will prompt corrective control inputs by the RPIC. If wind conditions and range to aircraft are extreme control difficulty greatly increases. Maintaining situational awareness of aircraft orientation and drift potential may require increased pilot attention and skill, land as soon as practical.<br><br><b>EP BATTERY FIRE</b><br>Significant danger is posed by a lithium metal or lithium-ion battery as both are highly flammable and subject to thermal runaway. Self-ignition can be caused by a short circuit, over charge, excessive heat, mishandled, or defective battery. Thermal runaway of a single cell will cause adjacent cells to explode with a combination of a flammable electrolyte, molten lithium metal, and a large pressure pulse. This is often prevented by thorough inspection practices, allowing cooling&nbsp;prior to recharging, using storage methods which prevent exposed terminals form contact, and maintaining structural integrity. Assuming these preventative measures are adhered to along with any other manufacturer recommendations, the risk of in-flight fire is minimized with only excessive operating temperatures and compromised structural integrity due to impact being the likely causes.<br><br><b>RPIC actions</b> – Land as soon as possible. Good preflight planning should have selected an open area with minimal flammable material present such as dirt or pavement. Consider flight termination prior to the loss of C2.</p>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            17 => 
            array (
                'id' => '18',
                'title' => 'Aircraft: Section 2 - Limitations',
                'name' => NULL,
                'document' => NULL,
                'content' => '<p>Small unmanned aircraft must be operated in accordance with the following limitations:<br><br></p>
<ul>
<li>Cannot be flown faster than a groundspeed of 87 kts (100 mph)</li>
<li>Cannot be flown higher than 400 feet AGL unless flown within a 400-foot radius of a structure and is not flown higher than 400 feet above the structure’s immediate uppermost limit (unless otherwise authorized by the FAA)</li>
<li>The sUAS must remain within VLOS of flight crewmembers.</li>
</ul>
<p>VLOS means you are capable of seeing the aircraft with vision unaided by any device other than corrective lenses. Further, it means to be able to see the UAS in order to determine its location, altitude, attitude, and direction of flight, observe the surrounding airspace, and determine the unmanned aircraft does not endanger persons or property.<br><br>Caution: While vision aids such as binoculars cannot be used to maintain VLOS with the aircraft according to the above description, they can be used only momentarily to enhance situational awareness. For example, the RPIC may use binoculars briefly to avoid flying over persons or to avoid conflicting with other aircraft.</p>
<ul>
<li>The RPIC or person manipulating the controls must regain VLOS when momentarily interrupted by obstructions or terrain:</li>
<ul>
<li>Immediately, if the VLOS was unintentional</li>
<li>As soon as practicable, if such loss was an operational necessity.</li>
</ul>
<li>Cannot be operated during civil twilight or at night unless equipped with anti-collision lights that are capable of being visible for at least 3 statute miles from the GCS and have a flash rate sufficient to avoid a collision.</li>
<ul>
<li>The RPIC has the authority to reduce the intensity of the lighting system in the interest of operational safety.</li>
</ul>
<li>Cannot be operated in a manner that interferes with operations and traffic patterns at any airport, heliport, or seaplane base.</li>
<ul>
<li>The RPIC must ensure the aircraft yields the right of way to all other aircraft, manned or unmanned, by knowing its location at all times, being able to maneuver it to avoid a collision, prevent other aircraft from having to take evasive action.</li>
</ul>
</ul>
<p> Note: First person view camaras cannot satisfy the “See and Avoid” requirement. However, such camaras can be used to enhance situational awareness as long as the “See and Avoid” requirement is satisfied in other ways.<br><br><br></p>
<ul>
<li>Cannot be operated in a Prohibited or Restricted Area or Areas Designated in NOTAMs unless that RPIC has permission from the using or controlling agency, as appropriate in 14 CFR § 107.47</li>
<ul>
<li>Related provisions:</li>
<ul>
<li>14 CFR § 99.7, Special Security Instructions</li>
<li>§ 91.137 TFRs in the vicinity of disaster/hazard areas</li>
<li>§ 91.138 TFRs in national disaster areas in the State of Hawaii</li>
<li>§ 91.139 Emergency air traffic rules</li>
<li>§ 91.141 Flight restrictions in proximity to the Presidential and other parties</li>
<li>§ 91.143 Flight limitations in the proximity of space flight operations</li>
<li>§ 91.144 Temporary restriction on flight operations during abnormally high barometric pressure conditions</li>
<li>§ 91.145 Management of aircraft operations in the vicinity of aerial demonstrations and major sporting events</li>
</ul>
</ul>
<li>Cannot operate over other another person unless that person is:</li>
<ul>
<li>Directly involved with the operation (VO or Crewmember)</li>
<li>Within a safe cover, such as inside a stationary vehicle or protective structure that would protect from harm if the sUAS were to crash into that structure.</li>
</ul>
</ul>
<p> Exceptions to this limitation must fall into one of the following categories:<br><br><b>Category 1</b><br>Operations are limited to sUAS with max weight of 0.55 lbs. These aircraft do not require additional labeling or a DoC.<br><br><b>Category 2 or 3 (DoC required)</b><br>Operations are only conducted by sUAS that fulfill performance-based standards that limit the likelihood and severity of injuries based on potential hazards. These aircraft must meet all 3 of the following criteria:<br></p>
<ul>
<li>Will not cause injury to a human being that is equivalent to or greater than the severity of injury caused by a transfer of designated foot-pounds of kinetic energy (specified below) upon impact from a rigid object.</li>
<ul>
<li>Category 2 ops: 11 foot-pounds of kinetic energy</li>
<li>Category 3 ops: 25 foot-pounds of kinetic energy</li>
</ul>
<li>Does not contain any exposed rotating parts that could lacerate human skin upon impact with a human being; AND</li>
<li>Does not contain any safety defects identified by the FAA</li>
</ul>
<p> In addition to these safety criteria a <b>Category 3</b> operation is allowed when it is conducted over a closed or restricted access site when all persons accessing the site are on notice that sUAS operations may take place within the site (this operation cannot be an open-air assembly), Or, if not within such a site the sUAS does not sustain flight over any person who is not a crew member.<br><br><b>Category 4</b><br>Operations are limited to sUAS with FAA-issued airworthiness certificates.<br><br>Note: Carefully review the part 107 performance-based standards and Advisory Circular 107-2 (as amended) guidance for the conduct of operations over people. Don’t operate over people if you don’t have to.</p>
<ul>
<li>Cannot be operated from a moving vehicle unless under the following conditions:</li>
<ul>
<li>Never from a moving aircraft</li>
<li>The vehicle is a land or water borne vehicle and the operation is over a sparsely or unpopulated area</li>
<li>Never while transporting another person’s property for compensation or hire unless:</li>
<ul>
<li>The total weight including cargo is less than 55 lbs</li>
<li>The operation is within State boundaries (intrastate)</li>
<li>No items dropped from the sUAS in a manner that creates undue hazard to persons or property</li>
<li>The aircraft may not have an experimental Airworthiness Certificate</li>
<li>The operation is not conducted from a moving land or water borne vehicle.</li>
</ul>
</ul>
</ul>
<p> Moving vehicle operations are subject to all other part 107 operations (e.g. VLOS, Ops over people, Crew communications, careless or reckless operation, et cetera)<br><br>Note: Many states currently prohibit distracted driving, and some have modified such laws with reference to drone use.<br></p>
<ul>
<li>Cannot be operated by a flight crew whose members are impaired or otherwise unable to carry out his or her duties and responsibilities (see the human factors section above)</li>
<li>Cannot be operated careless or recklessly as to endanger a person’s life or property (e.g. overloading, dropping objects, interfering with manned operations)</li>
</ul>
<p> Note: Many states currently have laws governing privacy considerations which RPICs are also subject to. </p>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            18 => 
            array (
                'id' => '19',
                'title' => 'Aircraft: Section 1 - General',
                'name' => NULL,
                'document' => NULL,
            'content' => '<p>The small size and low inertia of drones allows for use of a particularly simple flight control system. Most quadcopters configurations have two rotors that spin clockwise (CW) and two counterclockwise (CCW). Variability of motor speed independently provides maneuverability. Pitch and roll are controlled by varying the net center of thrust. This momentary decrease of the vertical component of lift rotated the vehicle about its lateral or longitudinal axis and the horizontal component of lift causes a directional velocity increase.<br><br>Yaw is controlled by varying torque of motors. The need for a single rotor vehicle to have a tail rotor to counteract torque is eliminated by having an equal number of rotors arranged in the same plane that can counter the others angular momentum resulting in a net zero about the vertical axis.<br><br>Put more simply, in order to rotate a stationary hovering drone about its vertical axis, the drone increases (or decreases) the speed of the pair of rotors that spin CW while keeping the ones that spin CCW the same speed. To tilt the drone to one side and move in that direction the drone increases (or decreases) the speed of only one rotor. Fine simultaneous control of fixed pitch rotor blades give the flight control computer significantly stable and predictable handling characteristics.<br><br>Low cost and low weight flight controllers, accelerometers (IMU), GPS and camaras have been combined with motors, speed controllers (ESCs), batteries, RF transceivers, and gimbals on a frame to result in a stable, maneuverable and controllable unmanned aerial system.<br><br>Caution: Catastrophic loss of lift from a single rotor, due to blade separation, significant imbalance, motor or ECS failure, or for any other reason is very likely to result in loss of control and damage.<br><br></p>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            19 => 
            array (
                'id' => '20',
                'title' => 'General Flight Planning',
                'name' => NULL,
                'document' => NULL,
            'content' => '<p><b>Weather</b><br>Wind conditions at low altitudes, in confined areas, near buildings or natural obstructions must be accounted for. Wind currents can behave unpredictably, especially in the gusty conditions. High winds will cause the aircraft to consume&nbsp;battery power rapidly as the aircraft struggles to maintain geographical position. An RPIC can alter automated flight plans to compensate for general wind direction and intensity. They can change altitudes and intended range from takeoff and landing location in an attempt to maintain control. They can also accept shorter flight times and increased battery temperatures. All of these should be recognized as coping mechanisms which should urge pilots to bring the flight to a safe end as soon as possible. Ignoring these factors often leads to a loss of control or fly away event. A maximum wind intensity limitation is very commonly recommended by most sUAS manufacturers and should be adhered to. Adverse wind events are the most common cause of in-flight loss of control for a sUAS.<br><br><b>Visibility and Clouds</b><br>RPIC ability to see and avoid other aircraft and obstructions is shown to be reliant on two main factors. First maintaining 500 feet below and 2,000 feet horizontally from clouds and 3 statute miles of unobstructed visibility (as observed from the GCS). Secondly, employing a habitual and effective scanning technique as previously discussed in the human Factors section.<br><br><b>Flight Planning Applications</b><br>Most drone manufacturers have proprietary drone flight planning apps. These may be different from the command and control (C2) apps used to fly the aircraft. The most popular is the DJI GS Pro app for flight planning with its companion app the DJI Go series for each specific model of DJIs aircraft. Autel has its Autel explorer app in which flight planning and free flight (no planned flight track defined) is handled in a single app. Generally, RPIC C2 can be but is not required to be linked to such apps. It is also possible and prevalent to operate an aircraft without the aid of a phone or tablet conveying the camaras feed. The addition of a phone or tablet does increase the RPICs situational awareness (SA) dramatically and is therefore strongly recommended.<br><br><b>Airspace</b><br>Caution: RPIC’s must be aware of the type of airspace in which they are operating their UAS at all times. Preventative measures must be taken to ensure no airspace&nbsp;violation can occur in the event of sUAS loss of control, wind event, aircraft component failure, or a fly away event.<br><br>Many sUAS operations can be conducted in uncontrolled, Class G airspace without further permission or authorization. Those that do require ATC Authorization are in Class B, C, D and within the lateral boundaries of the surface area of Class E designated for an airport.<br><br><b>B4UFly Application</b><br>The FAA has partnered with industry to produce apps that provide SA to pilots regarding airspace availability and restrictions. Examples include heliports in vicinity of hospitals, collegiate and professional sports stadiums, national parks, NOTAMs (Notice to Airman) and TFRs (Temporary Flight Restrictions), restricted or military airspace, ect. This has become a near “one stop shop” for determining the feasibility for operating in a given location.<br><br><b>Prohibited or Restricted Areas/NOTAMs/TFRs</b><br>Common TFR’s that relate to sUAS operations include but are not limited to:<br></p>
<ul>
<li>Presidential TFRs and NOTAMs</li>
<li>Emergency response TFRs and NOTAMs</li>
<li>Standing TFRs that go into and out of effect (e.g., stadiums for sporting events)</li>
<li>Current NOTAMs are available at www.faa.gov/pilots/safety/notams_tfr</li>
</ul>
<p><b>LAANC Authorization</b><br>The Low Altitude Authorization and Notification Capability system provides access to controlled airspace near airports through near real-time processing of ATC authorizations. This is done by linking apps like B4UFly and others to an app called “Aloft.” Once an account is created and details about sUAS, RPIC, and operational area/altitude entered, the request is submitted and compared to a database of unavailable airspace like NOTAMs. If no conflicts exist and potentially, if ATC workload is not extreme, an approval is returned to the RPIC through the app.<br><br>Note: DO NOT contact ATC facilities directly for airspace authorizations. Make authorizations through the FAAs DroneZone or LAANC as appropriate.<br><br>ATC approves or denies aircraft operations based on traffic density, controller workload, communications issues, or any type of operation that could impact the safe and expeditious flow of air traffic in that airspace. When authorization is required for an operation, it must be requested and granted prior to that operation. There is no established timeline for approval because each specific request carries with it unique complexity and safety concerns. For this reason RPICs should make requests as soon as possible prior to any operation in Class B, C, D and within the lateral boundaries of the surface area of Class E airspace for an airport.<br><br><b>State Authorization</b><br>States have and exercise their right to approve or deny sUAS operations. While some states only regulate drone use in proximity to roadways and state parks, others can seek to control operations statewide regardless of location. This approval is normally sought for and gained through the Department of Transportation. The State of Utah for example has an automated online process very similar to the federal process that LAANC provides. Though not as easy to use as an app with near real time approval, the information the RPIC provides is almost identical.<br><br><b>Local Municipalities and Airports</b><br>While no requirement currently exists to do so, a courtesy call to airport managers, correctional institutions, refineries, or similar entities, to inform them of the purpose, intentions, and routes/time of flights. Often explaining that federal and state approval had already been obtained and that the operation is conducted by certified, safety conscious, privacy minded, polite RPICs will prevent law enforcement from being needlessly dispatched.<br><br><b>Aircraft Inspection and Maintenance Records</b><br>The RPIC must maintain and inspect the sUAS prior to each flight to ensure it is in a condition for safe operation. Inspect all components for equipment damage or malfunctions in accordance with the manufacturer’s guidance.<br><br>For more information review your specific sUAS manufacturers details or The Small Unmanned Aircraft Systems Operating Handbook (FAA-H-8083-24)<br><br><b>Remote ID Test and Operation</b><br>Remote ID equipped unmanned aircraft (UAs) are designed to perform a self-test when turned on. No RPIC may operate an aircraft that has failed this remote ID self-test. Should the remote ID broadcasting equipment indicate improper function while in flight, the RPIC must land the UA “as soon as practicable.”<br><br>Remote ID functionality will be required on all part 107 aircraft by 16 September 2022. Manufacturers and producers of drones must be in compliance with the remote ID rules by that time.<br><br><b>GCS Command and Control Communications</b><br>Many sUAS utilize the same frequency bands for C2 and video links. These bands are regulated by the Federal Communications Commission or FCC and may require a license dependent on the manufacturer. These bands are also commonly used for Wi-Fi and other remote/wireless devices and therefore frequency congestion and interference may affect the safe uninterrupted operation, or limit range.</p>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            20 => 
            array (
                'id' => '21',
                'title' => 'General Operational Considerations',
                'name' => NULL,
                'document' => NULL,
            'content' => '<p><b>Human Factors</b><br>Human factors concern the interaction between people, machines, and the environment for the purpose of improving performance and reducing errors. It is a broad topic incorporating aeronautical decision making (ADM), Crew resource management (CRM), risk management, and aeromedical factors. Do not become complacent because you’re not sitting in your aircraft. Too many RPICs feel as if they should not be subject to some of the educational and operational standards that their manned aviation counterparts are. RPICs have the responsibility and obligation to avoid acting as an RPIC when not fit to do so.<br><br>For more information see AC 61-21A<br><br><b>Fitness for flight</b><br>One tool manned pilots have developed to help them recall important information is using “memory aids.” The most common memory aid used to self assess one\'s fitness for flight is the IM SAFE checklist.<br><br></p>
<ul>
<li><b>I </b>– Illness. Am I now or recently ill and not fully recovered?</li>
<li><b>M</b> – Medication. Am I under the influence of any medications?</li>
<li><b>S </b>– Stress. What external or internal pressures are felt?</li>
<li><b>A</b> – Alcohol. Am I adhering to FAA impairment regulations?</li>
<li><b>F</b> – Fatigue. Have I slept adequately for the last few days?</li>
<li><b>E</b> – Emotion. Do I feel anger, impatience, or lackadaisical?</li>
</ul> An honest assessment prior to each operation may prevent what the NTSB has determined to be causal or contributory to %80 of all aviation accidents.<br><br>
<p><b>Visual Scanning</b><br>To scan for traffic or hazards the crew should systematically focus on five to ten-degree segments of the sky for short intervals. Doing so allows the cones of the central vision (which see detail and color) to focus on infinity and the rods (which are sensitive to light and movement) of the peripheral vision to easily identify and track movement. Scanning of sky and flight control indications is a constant action cycle that repeats during the entire airborne operation.<br><br><b>Night Scanning and Other Considerations</b><br>Lighting contrast at night makes it difficult to visually discern location, attitude altitude and direction of flight. Be mindful of the night-blind spot in the central vision caused by the less effective cone shaped photoreceptors. As a result, night operations are subject to reduced operational ranges. Avoiding looking at bright lights after adapting to darkness reduces GCS lighting intensity. The use of Visual Observers (VO) is strongly encouraged at night. Consider increasing the size of the takeoff and landing zone.<br><br>Circadian Rhythm Effects of long-range travel, sleep wake cycles, stimulant use, et cetera, increase risk. Avoid self-imposed stressors that can limit night vision and concentration like exhaustion, hypoglycemia/low blood sugar, or tobacco use.<br><br><b>Crew Resource Management (CRM) and Communications</b><br>The RPIC holds a current certificate with an sUAS rating and has the final authority and responsibility for the operation and safety of the sUAS. This person must be designated before and for each flight but can change during the flight. The RPIC ensures that the operation poses no undue hazard to people, aircraft, or property in the event of a loss of control of the aircraft for any reason. The RPIC is accountable for complying with all applicable regulations of the operation. Effective gathering and integration of all human and hardware driven information&nbsp;in all phases of operations is key to safe flight. The RPIC must be able to delegate operational tasks and manage crew members, recognize, and address hazardous attitudes, and establish effective team communication procedures. Consideration for task saturation and setting expectations prior to flight will lead to success.<br><br>A person manipulating the controls (non-certified) may do so under the direct supervision of the RPIC if the RPIC maintains the ability to immediately take direct control of the sUAS.<br><br>A visual observer is designated by the RPIC as a flight crewmember to help see and avoid air traffic or other objects in the sky, overhead, or on the ground. The RPIC may use, but not required to use, any number of VOs to supplement their situational awareness and visual-line-of sight responsibilities. All VOs are positioned by the RPIC to continuously and sufficiently maintain visual-line-of-sight. RPICs and VOs should have the means to effectively communicate the position of the sUAS and all potential hazards.<br><br><b>Aeronautical Decision Making (ADM)</b><br>The RPIC attains situational awareness by information gathering during preflight. This includes at a minimum; sUAS performance capabilities, weather conditions, surrounding airspace and terrain, and ATC requirements. Technology like GPS, computer programs, mapping systems and displays assist in collecting information to improve RPIC situational awareness and risk-based ADM.<br><br>FAA safety studies identified five hazardous attitudes that interfere with sound decision making and exercise of authority: anti-authority, impulsivity, invulnerability, machismo, and resignation. Crew members should remain alert for, label, and correct these attitudes or behaviors without delay. See appendix C for more details.</p>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            21 => 
            array (
                'id' => '22',
                'title' => 'Public Safety and Government',
                'name' => NULL,
                'document' => NULL,
            'content' => '<p><b>Enforcement</b><br><br>Public Safety Agencies, such as Law Enforcement, are in the best position to deter, detect, and investigate unauthorized or unsafe UAS operations. While drones can serve as a useful tool, these agencies also have an important role in protecting the public from unsafe and unauthorized drone operations. This information will help law enforcement and public safety professionals understand safe drone operations and their authority. Federal Aviation Regulations prohibit the unsafe or unauthorized operation of an aircraft, including drones. Unsafe operations may result in substantial civil penalties and possible legal action against an operator\'s FAA-issued certificate or may be subject to criminal response by law enforcement in accordance with local laws and ordinances.<br><br>As a law enforcement officer, you are often in the best position to deter, detect and investigate unsafe or unauthorized drone operations.<br><br>See Appendix B for a helpful quick reference card for enforcement actions.<br><br><b>Public Aircraft Operations (PAO)</b><br><br>An operator or government entity conducting a PAO has the option to operate wholly under part 107 if all part 107 requirements are met, however, part 107 does not apply to a PAO. This means that a particular operation will be conducted as a PAO or as a civil part 107, but never as a combination of both. No PAO may be performed for a commercial purpose.<br><br>Public operations require more upfront work resulting in more airspace access. This is because ATC services are specified in a Certificate of Authorization or COA which describes the purposes and methods for a public safety agency to operate. These have traditionally been blanket COAs for Class G, jurisdictional, or site specific. Operations are limited to those described by the COA and its details. The agency will “self certify” sUAS airworthiness and its RPICs.<br><br>Civil operation is less up front work, requires aircraft registration and operator certification, and needs a waiver for operations outside those allowed by part 107.<br><br>Agencies should be careful to always operate either according to part 107 regulations <b>or</b> according to their COA. Never should an operation occur that does not fall into one of these two categories.<br><br>See Appendix B for a chart depicting more differences between public and civil ops.<br><br>Additional information about PAOs can be found in AC 00.1-1B</p>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            22 => 
            array (
                'id' => '23',
                'title' => 'FAA Certification Requirements',
                'name' => NULL,
                'document' => NULL,
                'content' => '<h2>Aircraft Registration</h2>
<p>&nbsp; &nbsp; &nbsp; &nbsp;Registration of some recreational and public safety/government drones but all commercial drones is required by the FAA and may be required by state or local authorities. Drones weighing less than 0.55 lbs do not need to be registered. For drones weighing more than 0.55 lbs but less than 55 lbs, an intuitive online registration process is available at faadronezone.faa.gov for commercial and recreational aircraft alike. This regulation will encompass most commercially available drones. For aircraft 55 lbs or more the registration process can begin at the same website but must be done by paper and is very similar to that of (N- number) manned aircraft. See 14 CFR Part 47 or 48.<br><br>Note: Consideration to this rule should be given if the aircraft in question is delivering or sling loading a payload.<br><br>Drones must be registered by someone aged 13 or older.<br><br>Currently registration costs $5 per drone and is valid for 3 years.<br><br>Mark your drone with your assigned registration number. Markings must be placed in accordance with the description on the FAA website.<br><br>Any aircraft operated under part 107 must be registered regardless of weight.<br><br>Note: Any RPIC operating a UAS in the NAS must make that system and its components available to the FAA for inspection and testing, upon request.</p>
<h2>Recreational pilots</h2>
<p>&nbsp; &nbsp; &nbsp; &nbsp;A recreational pilot is still regulated by the FAA under Title 49 U.S. Code § 44809. Such a pilot must:</p>
<ol>
<li>Pass the TRUST test and submit the certificate to the FAA or law enforcement upon request. (no cost) A list of FAA Approved Test Administrators of TRUST can be found at this website. </li>
<li>If the piloted aircraft weighs 55 lbs or more, register through the FAA’s DroneZone website and mark the aircraft with the assigned N-number.</li>
<li>Follow all safety guidelines on the FAA website or of an existing “FAA approved” aeromodelling organization.</li>
</ol>
<h4> A Public Aircraft Operation (PAO)</h4>
<p style=\'\'>A public safety organization such as a law enforcement agency may obtain approval to operate outside part 107 regulations by adhereing to PAO guidance.A more detailed of that process is available in AC 00-1.1B.</p>
<h2> Commercial pilots (also known as RPIC\'s) </h2>
<p> If your aircraft weighs between 0.55 and 55 lbs and you fly for work or business your operations must be conducted in accordance with 14 CFR Part 107 Small Unmanned Aircraft Systems (commonly referred to as 107).<br><br>Note: Operations are determined to be commercial in nature by the FAA. Do not assume your operation or mission is not commercial in nature without consulting the FAA’s website. (Even YouTube posted footage is considered to be monetized and therefore subject to part 107 regulations)</p>
<h4> Commercial Pilots Must: </h4>
<ul class=\'nav nav-tabs\'>
<li class=\'nav-item\'> <a href=\'\' class=\'nav-link show\' data-toggle=\'tab\' data-target=\'#tabone\'><b>Learn the Rules</b></a> </li>
<li class=\'nav-item\' style=\'\'> <a class=\'nav-link\' href=\'\' data-toggle=\'tab\' data-target=\'#tabtwo\'><b>Become an FAA-Certified Done Pilot</b></a> </li>
<li class=\'nav-item\'> <a href=\'\' class=\'nav-link \' data-toggle=\'tab\' data-target=\'#tabthree\'><b>Begin Operating a Registered Drone</b></a> </li>
</ul>
<div class=\'tab-content mt-2\'>
<div class=\'tab-pane fade\' id=\'tabone\' role=\'tabpanel\' style=\'\'>
<p class=\'\'>Some types of operations are not covered by part 107. You may request to fly specific drone operations not allowed under part 107 by requesting an operational waiver. These waivers allow drone pilots to deviate from certain rules under part 107 by demonstrating they can still fly safely using alternative methods. FAA review and approval/denial could take up to 90 days. You do NOT need a waiver to fly a drone following part 107 rules. You DO need a waiver when you want to operate a drone contrary to the rules in part 107 under the waivable operations listed below:<br><br>To interpret the above table, use the following definitions which have been taken directly from the FAA:<br>
</p>
<center><img src=\'public/img/CommercialPilotWaiver.png\'></center><a href=\'public/img/CommercialPilotWaiver.png\' target=\'_blank\'>View the Commerical Pilot Waiver here</a>
<h4><br>Operations Over Human Beings<br></h4>
<p><b>What does \'over\' mean?</b><br>The term \'over\' refers to the flight of the small unmanned aircraft directly over any part of a person. For example, a small UAS that hovers directly over a person\'s head, shoulders, or extended arms or legs would be an operation over people. Similarly, if a person is lying down, for example at a beach, an operation over that person\'s torso or toes would also constitute an operation over people. A flight where a small UAS flies over any part of any person, regardless of how long the flight is over the person, would be considered an operation over people.<br><br><b>What does \'sustained flight\' mean?</b><br>Sustained flight over an open-air assembly includes hovering above the heads of persons gathered in an open-air assembly, flying back and forth over an open-air assembly, or circling above the assembly in such a way that the small unmanned aircraft remains above some part of the assembly. Sustained flight over an open-air assembly of people does not include a brief, one-time transiting over a portion of the assembled gathering, where the flight is unrelated to the assembly.<br><br><b>What is an \'open-air assembly\'?</b><br>The FAA employs a case-by-case approach in determining how to apply the term \'open-air assembly.\' Potential examples of open-air assemblies may include sporting events, concerts, parades, protests, political rallies, community festivals, or parks and beaches during certain events. Some potential examples that might not be considered open-air assemblies include individual persons or families exiting a shopping center, athletes participating in friendly sports in an open area without spectators, individuals or small groups taking leisure in a park or on a beach, or individuals walking or riding a bike along a bike path. Whether an open-air assembly exists depends on a case-by-case determination based on the facts and circumstances of each case.<br><br>Civil twilight is defined to begin in the morning, and to end in the evening when the center of the Sun is geometrically 6 degrees below the horizon. Which is not to be confused with the definition of night. Which is the time between the end of evening civil twilight and the beginning of morning civil twilight, as published in the American Air Almanac, converted to local time.<br><br>Waiver application and further guidance can be found at this website.</p>
<p></p>
</div>
<div class=\'tab-pane fade\' id=\'tabtwo\' role=\'tabpanel\'>
<p class=\'\'>This knowledge test is not required for pilots who are already certificated under part 61 (regulation governing pilots of manned aircraft) and have a current flight review. Those pilots need only show proof of completing an online training course and the flight review with the FTN referenced IACRA. As with all 8710-13 or IACRA applications a CFI signature validating these documents is required.<br><br><b>Testing process</b><br>Study for the part 107 knowledge test using publicly available preparation courses, commercially available training companies, flight instructors, YouTube, or the free information accessed here at the FAA’s website. This link also leads to the FAA’s Airman Certification Standards (ACS). Knowledge areas and subjects are selected that give RPICs background and understanding of the greater aviation environment and processes.<br><br>The written knowledge exam can be taken at an approved testing center by anyone who is able to read, write, speak, and understand English AND is aged 14 or older AND is in a physical and mental condition to safely fly a UAV AND provide acceptable* photo ID.<br><br>&nbsp;*Photo ID with signature, date of birth and current address.<br><br>Applicants will have 2 hours to answer 60 multiple choice questions for a score of %70 or more to pass.<br><br>To register for the test the applicant must obtain an FAA Tracking Number or FTN through the FAA’s IACRA webpage.<br><br>Retesting after failure is possible but the applicant must wait 14 days to retake and submit the failed test.<br><br>Schedule an appointment at the approved Knowledge Testing Center (the testing fee at the time of this publication is $175)<br><br>Complete the FAA Form 8710-13 on the IACRA website to obtain the temporary certificate. This submission is required to bear the signature of a recommending CFI who certifies the applicants identification, documentation, and knowledge is meets the FAAs requirements. The actual RPIC Certificate comes by mail (timing subject to FAA workload).<br><br>Once the knowledge test is passed and the license is in hand recurrent training is then required. This training must occur before the end of the 24th calendar month after the knowledge test was passed. This is the FAA’s way of assisting RPIC’s to maintain critical knowledge and keep informed of dynamic issues, including changes to regulations. The recurrent training course completion is proven by a certificate that the RPIC will keep in his/her possession while flying.<br><br>Note: Recurrent training courses are different for part 61 certificated pilots with current flight reviews (ALC-515) and all other previously part 107 certificated pilots (ALC-677), both are free.<br><br><br><b>Testing subjects</b><br>See Appendix A: ACS References<br><br>Note: Apps for tablets, phones, and computer-based practice exams are available and recommended.</p>
</div>
<div class=\'tab-pane fade active show\' id=\'tabthree\' role=\'tabpanel\'>
<p class=\'\'>An RPIC must have the following documents in their physical possession and readily accessible during all sUAS flight operation: </p>
<ul>
<li>Remote Pilot Certificate with an sUAS rating issued by the FAA</li>
<li>Personal Identification that includes the RPIC’s photograph, date of birth, and signature</li>
<li>Aircraft registration (paper or electronic)</li>
<li>The documents must be presented for inspection, upon request from:</li>
<ul>
<li>FAA</li>
<li>Any Federal, State, or local law enforcement officer</li>
<li>An authorized representative of the NTSB or TSA</li>
</ul>
</ul> Other documents or records may be requested such as: <ul>
<li>Any waiver, authorization, or exemption applicable to the flight</li>
<li>Other documentation related to the operation</li>
<li>Proof of RPIC knowledge test recency training</li>
<li>Aircraft Airworthiness Certificate (for Category 4 operations over people)</li>
</ul>
</div>
</div><b>
<ol></ol>
</b>
',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            23 => 
            array (
                'id' => '24',
                'title' => 'A Brief Drone Introduction',
                'name' => NULL,
                'document' => NULL,
            'content' => '<p>The UAV, more commonly known as a drone, is an aircraft without human operator on board. This aircraft is currently understood to be controlled by a human operator from a ground-based control station or GCS. While this is a broad definition and nuances such as, the aircraft can be controlled by an airborne operator from anywhere in the world or that the aircraft was operated by a human, are evolving concepts, they are beyond this documents scope. All aircraft have various levels of autonomy. For our purposes we will focus our attention on the now common vertical take-off and landing or VTOL quadcopter that serves most common public interests commonly today, though the reader will find applicability with all aviation related operations.<br><br>Those common public interests are likely to include many recreational and commercial pursuits. The Federal Aviation Administration or FAA is the federal regulatory body governing aviation in the United States and treats these operations differently. We will adopt and discuss their definitions in the next section but focus on the commercial and public safety standards and operations.<br><br>Safe flight operation in the Nation Airspace System or NAS is only possible due to the FAAs’ regulations and pilot adherence to them. Furthermore, the state, county, or local municipality in which the operation occurs may also regulate drone use. It is therefore legally, not just ethically, incumbent on all drone owners or operators to identify and adhere to relevant regulations where they exist. Public perception of drone use varies widely. In this document we touch briefly on efforts the remote pilot operator can make to safely execute mission objectives while minimizing the likelihood of perceived privacy violations.<br><br>It is also the opinion of the author that the public should be accurately informed of the legalities and benefits of drone use to avoid unnecessary conflict. In that spirit, all aviation enthusiasts would benefit by acting as good will ambassadors on behalf of aviation by attending or supporting community events which tactfully educate themselves, other pilots and concerned citizens. Please see the FAA’s website for more information.<br><br>Aircraft serve a purpose. Whether your operations purpose is related to payload delivery, flight training, or the most common employment of a camara, or any other less common mission. Remembering that the aircraft is of little benefit without a functioning payload (it may be considered an airborne hazard), and the payload is immobilized without a healthy aircraft to reposition it places the RPIC in a safety and efficiency mindset. Finding consistent methods to maximize imagery exploitation and information dissemination does not just increase efficiency. Overall safety is increased by having fewer operations airborne at any time or having operations of a shorter duration.</p>',
                'created_at' => '2022-03-29 21:14:41',
                'updated_at' => '2022-03-29 21:14:41',
            ),
            24 => 
            array (
                'id' => '25',
                'title' => 'DJI Mavic Pro Platinum Specs',
                'name' => 'DJI Mavic Pro Platinum – Specs.pdf',
                'document' => 'public/document/FAwZhfRwVy3MDyCuzqlo26FBywobC28gVOyKyxrB.pdf',
                'content' => NULL,
                'created_at' => '2022-05-18 16:16:25',
                'updated_at' => '2022-05-18 16:16:25',
            ),
        ));
        
        
    }
}