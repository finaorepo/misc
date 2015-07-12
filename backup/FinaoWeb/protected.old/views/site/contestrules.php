<script>

$(document).ready(function(){



	// hide #back-top first

	$("#back-top").hide();

	

	// fade in #back-top

	$(function () {

		$(window).scroll(function () {

			if ($(this).scrollTop() > 100) {

				$('#back-top').fadeIn();

			} else {

				$('#back-top').fadeOut();

			}

		});



		// scroll body to 0px on click

		$('#back-top a').click(function () {

			$('body,html').animate({

				scrollTop: 0

			}, 800);

			return false;

		});

	});



});

</script>
<style>

#back-top{position:fixed; bottom:120px; z-index:99; right:0px;}

a.back{margin-bottom: 7px; -webkit-transition: 1s; -moz-transition: 1s; -o-transition: 1s;  transition: 1s;}

#scroll-down{background:url(images/home/scrolldown.png) left top no-repeat; width:22px; height:18px; -webkit-animation: scroll_down .7s ease infinite; -moz-animation: scroll_down .7s ease infinite; animation: scroll_down .7s ease infinite; position:fixed; top:500px; right:15px;}

</style>



<body  id="top">

<p id="back-top"><a class="back" href="#top"><img src="<?php //echo $this->cdnurl; ?>/images/home/backtop.png" width="150" /></a></p>

	 <div class="main-container">

    	<div class="finao-canvas">

			<div>
                <div>
                	<span class="left"><a href="/careercatapult-hbcu"><img src="<?php echo $this->cdnurl;?>/images/careerCatapult.png"  width="100" height="100" /></a></span>
                    <span class="orange font-20px padding-10pixels left" style="width:860px;">FINAO Career Catapult Contest- Terms and Conditions <a class="right" href="<?php echo Yii::app()->request->urlReferrer;?>"><img src="<?php echo $this->cdnurl; ?>/images/back.png" width="60" /></a></span>                    
                </div>
                
				
                <span class="font-16px padding-10pixels"><b><p><p>&nbsp;</p>Official Rules.</p>
				<p style="margin-top:5px;">NO PURCHASE NECESSARY TO ENTER OR WIN. Purchasing Will Not Increase Your Chance Of Winning. Many Will Enter, Few Will Win</p></b></span>
            </div>
			<p style="margin-top:5px;">
				<hr>
			<div class="clear"></div>
            <div class="content-run-text">

<p class="bolder" style="margin-top:5px;">1. Eligibility:</p>
<p>Entry Submission and Voting in the FINAO Career Catapult Contest &shy;FINAO Career Catapult  (hereafter, &quot;Contest&quot;) is open only to those who are, as of the date of entry, legal permanent residents of the fifty (50) United States and District of Columbia eighteen (18) years of age or older and a registered student at one of the Colleges or Universities affiliated with HBCU Connect. Employees, officers, directors, agents and representatives of FINAO or HBCU Connect (hereafter, &quot;Sponsor&quot;), are not eligible to participate or win a prize. Void where prohibited by law. All applicable federal, state and local laws apply.</p>
<p class="bolder" style="margin-top:5px;">2. Contest Submission Period: </p>
<p>The contest submission period starts on 12/15/13 and on 03/31/14 (hereafter, &quot;Contest Submission Period&quot;).</p>
<p class="bolder" style="margin-top:5px;">3. Contest Voting Period:</p>
<p>The Contest voting period starts on 12/16/13 and ends at 11:59:59 pm ET on 04/18/14 (hereafter, &quot;Contest Voting Period&quot;).</p>
<p class="bolder" style="margin-top:5px;">4. How To Enter the Contest: </p>
To participate, visit finaonation.com/careercatapult-hbcu during the Contest Submission Period and complete and submit the registration form inclusive of either of the following submission types:
<p>a.	Video: a video between 15 and 60 seconds in length depicting your FINAO story, why it means so much to you and how it will impact your life beyond college, hereafter, your &quot;Story&quot; or;</p>
<p>b.	Essay/Image: an essay in five hundred (500) words or less (including counting words such as  &quot;I&quot;, &quot;a&quot;, etc.) telling your FINAO story, why it means so much to you and how it will impact your life beyond college, hereafter, your &quot;Story&quot; AND up to five (5) current, original, unaltered digital photos or images depicting your Story.</p>
<p>The essay, photos/images and registration form combined, and the video and registration form combined, are hereafter referred to as an &quot;Entry&quot;. You may enter as often as you wish, however each Entry submission must be different and original. Modification of an existing work does not qualify as different or original. If the original digital photo(s)/image(s) were saved at a lower resolution and attached to the registration form, save the original high resolutions for potential future use by Sponsor and its designees. All Contest Entries must meet the Contest Entry Requirements set forth below. Entries must be received during the Contest Submission Period and no later than 11:59:59 pm PST on 03/31/14 to be eligible.</p>
<p class="bolder" style="margin-top:5px;">Contest Entry Requirements:</p>
<p> Photo(s)/image(s) and video must (i) be original; (ii) be taken and/or created by you; and (iii) only include friends or family members for whom you have secured permission to submit Entry in this Contest. Additionally, any minors shown in the Entry must be either the legal ward of an eligible entrant or have acquired a release form from the parents and/or guardian for appearance in the Entry. Photo(s)/image(s) must be in a JPEG or PNG file, each not exceeding 5MB in size. Video must be no more the one (1) minute in length, in a 3GP, AAC, AVI, FLV, MP4 or MPEG-2 file not exceeding 1 GB in size. To be eligible, any Entry (and individual components therein) cannot have been previously published or submitted in any competition or have won any awards, and must be (i) about either yourself or your child or legal ward only; (ii) complete, (iii) in English, and (iv) your original creation and solely owned by you. In addition, to be eligible, Entry must not include any third party packaging, logos or any other third party intellectual property or general property other than FINAO, HBCU Connect or recognizable images from your school campus   Entry cannot defame or invade publicity and/or intellectual property rights or the privacy of any person, living or deceased, or infringe upon any proprietary or other rights of any person or party. Entry may also not contain, as determined by Sponsor in its sole discretion, any content that is sexually explicit or suggestive, violent or derogatory, profane or pornographic, contains nudity; promotes alcohol, illegal drugs, tobacco, firearms/weapons (or use of any of the foregoing); promotes any activities that may appear unsafe or dangerous; promotes any particular political agenda or message; is obscene or offensive; endorses any form of hate or hate group; defames, misrepresents or contains disparaging remarks about other people or companies; contains trademarks, logos, or trade dress (such as distinctive packaging or building exteriors/interiors) owned by others, other than as outlined above; contains any personal identification (other than as provided in the registration form); contains materials embodying the names, likenesses, or other indicia identifying any person, including, without limitation, celebrities and/or other public or private figures, living or dead, without requisite permission; contains look-alikes of celebrities or other public or private figures, living or dead; communicates messages or images inconsistent with the positive images and/or good will to which Sponsor wishes to associate; and/or violates any law. Entries deemed by the judges, in their sole discretion, to be immoral, obscene, profane or not in keeping with Sponsor&acute;s image or in violation of these Official Rules will be void. In the event of non-compliance with any requirements specified herein or with any of the terms of these Official Rules, Entry will be void.</p>

<p>By entering the Contest, each entrant (and his/her parent/legal guardian as applicable) warrants and represents that his/her Entry is original, has not been previously published or won any award, does not contain any material that would defame or otherwise violate or infringe upon the rights of any third party, including patents, copyrights, trademarks or rights of privacy or publicity, and will not violate any federal, state or local laws or ordinances. Entrants (and his/her parent/legal guardian as applicable) further warrant and represent that they have secured the requisite consent from any third party referenced in their Entries.</p>
<p>Incomplete Entries and/or Entries containing inaccurate entrant information will be disqualified at Sponsor&acute;s sole discretion. The use of script, macro or any other device to automate or subvert the entry process is prohibited and all such Entries and Entries made by any other means which subvert the entry process will be void. In the case of a dispute as to the entrant who submitted an Entry, Entry will be deemed made by the person named on the applicable registration form (regardless of whether that is the name of the authorized account holder of the email address from which said Entry was submitted) and he/she must comply with these Official Rules. Other than as otherwise specified herein, neither Sponsor, nor anyone acting on its behalf, will enter into any communications with any entrant regarding this (except for the purposes of notifying the Finalists and winners) or acknowledge any Entry (or portion thereof) received. Any Entry not meeting all Entry requirements stated herein will be void.</p>
<p><b>If the Entry contains any material or elements that are not owned by the entrant (with the exception of Permitted Marks), and/or which are subject to the rights of third parties, the entrant is responsible for obtaining, prior to submission of the Entry, any and all releases and consents necessary to permit the use and exhibition of the Entry by Sponsor in the manner set forth in these Official Rules, including, without limitation, name and likeness permissions from any person who appears in or is identifiable in the Entry (and, if such person is a child or legal ward of entrant, entrant will be required to provide their consent in a form acceptable by Sponsor). </b> Sponsor reserves the right to request proof of these permissions in a form acceptable to Sponsor from any entrant at any time. Failure to provide such proof may, if requested, render Entry null and void. By submitting an Entry, entrant warrants and represents that he/she and any persons appearing or who are identifiable in the Entry consent to the submission and use of the Entry in the Contest and to its use as otherwise set forth herein.</p>
<p>By submitting an Entry, entrant hereby grants the Released Parties, without any limitation of any other rights granted herein, permission for the Entry to be posted on <a href="<?php echo $this->cdnurl;?>/careercatapult-hbcu" style="color:#F47B20">finaonation.com/careercatapult-hbcu</a>, hbcuconnect.com and other websites as determined by Sponsor. Entrant agrees that Released Parties are not responsible for any unauthorized use of Entries by third parties. Released Parties do not guarantee the posting of any Entry and may remove a posted Entry at any time.</p>
<p>By submitting an Entry, entrant  acknowledges and agrees that Sponsor may obtain many submissions under this Contest and that such Entries may be similar or identical in theme, idea, format or other respects to others submitted under this Contest and/or other Contest staged and/or sponsored by the Sponsor, or to other ideas conceived by or provided to Sponsor and entrant waives any and all claims entrant may have had, may have, and/or may have in the future, that any Entry and/or other works accepted, reviewed and/or used by the Sponsor (or its designees) may be similar to his/her Entry. Except where prohibited by law, each entrant acknowledges and agrees that the Sponsor does not have now, nor shall it have in the future, any duty or liability, direct or indirect, vicarious, contributory, or otherwise, with respect to the infringement or protection of any copyright in and to entrant&acute;s Entry or any other right related thereto.</p>
<p class="bolder" style="margin-top:5px;">5. Entry Judging: </p>
<p class="bolder" style="margin-top:5px;">Weekly Round of Judging:All eligible Videos or Essay/Image Entries received will be judged against each other based on the following criteria by Sponsor:</p> 
<ol type="none"><li>1)	FINAO Storytelling; Does the Entry tell a clear story about the entrant&acute;s FINAO that captivates its audience? </li> 
<li>2)	Creativity Visual Artistry/Originality; For Video Entries: Does the video showcase the FINAO artistically?  </li>
For Essay/Image Entries: Does the photo(s)/image(s) showcase the FINAO Story? Does the essay metaphorically paint a picture with words?
<li>3)	Passion; Does the Entry stir emotion in those who watch/see/read it? </li>
<li>4)	Relevance; Does the Entry meet the criteria of the Story?  </li>
<li>5)	Sense of Community; Is the Entry something that people will want to share with their digital community?</li>
<li>6)	Votes garnered; voting will factor into Sponsor selection but will not be the exclusive determination. </li></ol>
<p>The fifteen weekly winners as determined in weekly selection by the judges in their sole discretion, will advance to Final Round judging. Sponsor will select an additional ten (10) Entries to Final Round judging.</p>
<p><span class="bolder" style="margin-top:5px;">Round 2 of Judging:</span> During Round 2 of judging, a separate panel of qualified judges, determined by Sponsor (in its sole discretion), will judge each of the top thirty (30) Videos and Essay/Image Entries based on the following criteria:</p>

<ol type="none"><li>1)	FINAO Profile: Does the profile of the student entered reflect their story: Minimum requirements: Profile photo, one tile, two FINAOs, updates to FINAOs with photos, videos and journals monthly. 0-25 points. </li>    
<li>2)	FINAO Storytelling; Does the Entry tell a clear story about the entrant&acute;s FINAO that captivates its audience? 0-15 points;  </li>
<li>3)	Creativity Visual Artistry/Originality; For Video Entries: Does the video showcase the FINAO artistically?  For Essay/Image Entries: Does the photo(s)/image(s) showcase the FINAO Story? Does the essay metaphorically paint a picture with words?;  0-15 points;</li>
<li>4)	Passion; Does the Entry stir emotion in those who watch/see/read it?; 0-10 points; </li>
<li>5)	Relevance; Does the Entry meet the criteria of the Story?  0-10 points; </li>
<li>6)	Sense of Community; Is the Entry something that people will want to share with their digital community? 0-10 points;</li>
<li>7)	Votes garnered; voting will factor into Sponsor selection but will not be the exclusive determination. 0-10 points; </li></ol>
<p>The three (3) Video and Essay/Image Entries with the highest scores during Final Round judging will be deemed the Finalists and will be awarded the Internships based on potential fit between the applicant and the Hosting Sponsor business. By participating, entrants agree to abide by these Official Rules and the decisions of the Sponsor and judges, which are final and binding in all matters relating to this Contest.</p>
<p class="bolder" style="margin-top:5px;">6. Finalist Notification:</p>
<p>Potential Finalists will be selected on or about 05/05/2014 and will be notified by telephone, email and/or overnight mail. Potential Finalists will be required to (i) execute and return an Affidavit of Eligibility, Liability and (where legal) Publicity Release with any other documents required by Sponsor within two (2) days of date of issuance of notification.</p>
<p>Further proof or verification of identity and qualifications may be required along with a background check and entrant, by participating, agrees to such check and agrees to provide full consent if required. Failure to comply may result in disqualification and, based on the criteria described above and time permitting, selection of another Finalist to compete in the Contest Voting Period. In addition, at the discretion of the Sponsor, potential Finalist(s) may be disqualified for any of the following: if charged with or convicted of a felony or misdemeanor, is not eligible based on the eligibility requirements set forth above, or if delinquent on a government ordered payment, such as but not limited to: child support, spousal support, alimony, tax payments, etc. Noncompliance with any of the foregoing, with these Official Rules, the inability to contact a potential Finalist within a reasonable time period, the failure to complete and return requested documentation in a timely manner, or any notification being returned as non-deliverable may result in disqualification and, at Sponsor&acute;s discretion, a runner-up being chosen. Finalist status is subject to verification of eligibility and compliance with these Official Rules.</p>
<p>Finalists&acute; Entries will be posted on <a href="<?php echo $this->cdnurl;?>/careercatapult-hbcu" style="color:#F47B20">finaonation.com/careercatapult-hbcu</a> during the Contest Voting Period as outlined below.</p>
<p class="bolder" style="margin-top:5px;">7. Contest Voting Period:</p>
<p>During the Contest Voting Period, each of the Finalist Entries will be posted on <a href="<?php echo $this->cdnurl;?>/careercatapult-hbcu" style="color:#F47B20">finaonation.com/careercatapult-hbcu</a> for public voting. To vote for a Finalist Entry, during the Contest Voting Period, eligible individuals 18 years of age or older may visit <a href="<?php echo $this->cdnurl;?>/careercatapult-hbcu" style="color:#F47B20">finaonation.com/careercatapult-hbcu</a> and follow the instructions provided, view each of the Finalist Entries and click on the applicable &quot;Vote&quot; button to cast your vote for the one (1) Video Entry in which you feel is the most engaging storyline <b>Limit one (1) vote submission per person per day. Additional votes received from the same person in excess of the stated daily limitation will be void.</b></p>
<p>At the conclusion of the Contest Voting Period, the five (5) Finalist Entries that received the highest number of votes will be deemed the Grand Prize winners. In the event of a tie during the Contest Voting Period, the tied Finalist Entries will be re-judged (by a panel of judges determined by Sponsor in its sole discretion) based on Relevance; Does the Entry meet the criteria of the Story: 0-100 points. Grand Prize winner status is subject to verification of eligibility and compliance with these Official Rules.</p>
<p>All vote counting will be conducted at the direction, and in the sole discretion, of the Sponsor. The use of automated devices (or any other devices intended to automate or subvert any aspect of entry or voting or any other procedure that subverts the entry process) to cast a vote is prohibited and any Entry or vote through such means will, at Sponsor&acute;s sole discretion, be void. Sponsor reserves the right, in its sole discretion, to void any votes of entrants whom Sponsor believes has attempted to tamper with or impair the administration, security, fairness or proper play of this Contest or is in violation of these Official Rules. Eligible entrants are prohibited from obtaining votes by any fraudulent or inappropriate means, including, without limitation, offering prizes or other inducements to members of the public, as determined by Sponsor in its sole discretion. Neither Sponsor, nor anyone acting on its behalf, will enter into communications with any entrant regarding Contest other than to notify the potential Finalists and winners.</p>
<p class="bolder" style="margin-top:5px;">8. Prizes:</p>
<p><b>One  (1) Grand Prizes: </b>One (1) paid Internship beginning June 2, 2014 and ending August 8, 2014 (Internship package includes all of the following: a) round trip coach air transportation from a major U.S. gateway airport nearest winner&acute;s residence in the U.S. to destination city; b) paid internship in the amount of three thousand, five hundred dollars ($3,500) for a ten week period of time, working Monday-Friday or as required. Pay will be distributed bi-weekly in five equal payments beginning the first Friday following the first full week of work; c) Room, board and ground transportation will be coordinated by sponsor; d) Approximate Retail Value (&quot;ARV&quot;) = $10,000 for Grand Prize package. Actual prize value may vary based upon location of winner&acute;s residence. Any difference between stated value and actual value will not be awarded. If winner resides within a one hundred fifty (150) mile radius of a destination city, ground transportation may be provided in lieu of air transportation at Sponsor&acute;s sole discretion, and no compensation or substitution will be provided for difference in prize value.</p>
<p><b>Two (1) Second Prizes:</b> Two (2) paid Internships beginning on or around June 2, 2014 and ending on or around August 8, 2014 (each Internship package includes: a) paid internship in the amount of three thousand, five hundred dollars ($3,500) for a ten week period of time, working Monday-Friday or as required. Pay will be distributed bi-weekly in five equal payments beginning the first Friday following the first full week of work; c) payment of airfare, room, board and ground transportation will be determined by the Alumni hosting  sponsor; cost for these  d) Approximate Retail Value (&quot;ARV&quot;) = $4,000 for Second Prize package. Actual prize value may vary based upon location of winner&acute;s residence and offering of host Alumni sponsor. Internships must be taken on dates designated by Sponsor or prize will be forfeited in its entirety and, at Sponsor's discretion, awarded to a runner-up. Travel and accommodation restrictions and other restrictions may apply. All prize details will be determined by Sponsor in its discretion. Costs and expenses associated with the acceptance and use of a prize not specified herein as being awarded, including, but not limited to, all federal, state and local taxes, food, beverages, luggage fees, souvenirs, gratuities, ground transportation other than as outlined above and miscellaneous travel expenses are winners' sole responsibilities. A 1099 tax form will be issued in the amount of the rewarded prize package to the Prize winners.</p> 
<p class="bolder" style="margin-top:5px;">9. Miscellaneous; Release and Limitations of Liability:</p>
<p>No transfer, assignment, cash redemption, or substitution of prize (or portion thereof) except by Sponsor who reserves the right to substitute a prize (or applicable portion thereof) with one of comparable or greater value, as determined by Sponsor. Entrants agree, by entering, that 1) Sponsor and its designees may use (unless prohibited by law), entrant&acute;s name, city and state of residence, Entry, Finalist Entry, photograph, any recording (voice, film, video), and/or likeness for advertising, trade and/or any other purposes in any media (including but not limited to online at <a href="<?php echo $this->cdnurl;?>/careercatapult-hbcu" style="color:#F47B20">finaonation.com/careercatapult-hbcu </a> now or hereafter known throughout the world in perpetuity, without further compensation, permission or notification, and 2) the Released Parties shall have no liability and will be held harmless by entrant (and his/her parent/legal guardian) for any claim, action, liability, loss, injury or damage to entrant or any other person or entity, including, without limitation, personal injury or death to entrant or any other person or damage to personal or real property, due in whole or in part, directly or indirectly, by reason of the acceptance, possession, use or misuse of any prize any travel/activity related thereto  or participation in this Contest or the use of any Entries or Finalist Entries by Sponsor, its designees or any third party. Sponsor reserves the right, in its sole discretion, to modify, terminate or suspend this Contest (or any portion thereof) should virus, bugs, non-authorized human intervention or other causes corrupt or impair the administration, security, fairness or proper play of the Contest (or any portion thereof) and, in the event of termination, at its discretion, select the Finalists and/or prize winners (as applicable) from those eligible, non-suspect Entries or Finalist Entries (as applicable) received prior to event requiring such termination using the applicable judging procedure/winner selection outlined herein and eligible, non-suspect votes as applicable. </p>

<p><span class="bolder" style="margin-top:5px;">Contest Entry and Finalist Entry Assignment of Rights: </span> Entrants warrant and represent that (1) Sponsor shall own the Entry and Finalist Entry if applicable (and all material and rights embodied therein) and that such Entry/Finalist Entry will not be acknowledged or returned; and (2) that by entering, the Entrant irrevocably assigns to Sponsor and its designees any and all rights, title and interest in the Entry and Finalist Entry including but not limited to all intellectual property rights; and (3) that Sponsor and its designees shall have, without limitation, the perpetual right worldwide to edit, adapt, modify, publish, exploit and use the Entry and/or Finalist Entry in any way and in any and all media now known or hereinafter discovered or devised, world-wide for trade, advertising, promotional, public relations and/or other purposes as Sponsor and/or its designees may determine without further permission from, or notification or consideration to entrants or any third parties.</p>

<p>Entrants further agree to abide by these Official Rules and the decisions of the Sponsor and judges, which shall be final and binding. Entrant's submission of an Entry and/or vote constitutes his/her representation of eligibility, consent to participate in Contest and consent for Sponsor to obtain, use, and transfer his/her name, address and other information for the purpose of Contest administration. Released Parties are not responsible for lost, incomplete, invalid, unintelligible, inaccurate, undeliverable, garbled, late, stolen, damaged or misdirected Entries, Finalist Entries or votes, all of which will be disqualified; failures or malfunctions of phones, phone lines or telephone systems or other communications or malfunctions; interrupted or unavailable network, server, cable, satellite, Internet Service Provider (ISP) or other connections; miscommunications, failed computer hardware or software or other technical failures; garbled, lost, misrouted or scrambled transmissions; any error, omission, interruption, defect or delay in any transmission or communication; traffic congestion on the Internet or for any technical problem, including but not limited to any injury or damage to entrants&acute; or any other person&acute;s computer related to or resulting from participation in the Contest; theft, destruction or unauthorized access to, or alteration of, Entries, Finalist Entries or votes; the creation and production of Finalist Entry or human-processing error; printing, typographical or other errors or omissions in these Official Rules or in any Contest-related advertisements or other materials; or other errors or problems of any kind whether mechanical, human, technical, network, electronic; or errors which may occur in connection with the administration of the Contest, the incorrect uploading of Entries, the processing or judging of Entries, creation and production of Finalist Entries or the tabulation of votes, the awarding or announcement of the winners or Finalists or in any other Contest-related materials. Sponsor reserves the right to void and remove any and all Entries and/or Finalist Entries of an entrant or votes of a voter who Sponsor believes has attempted to tamper with, or impair the administration, security, fairness, judging or proper play of Contest and such entrant/voter will be disqualified and all associated Entries, Finalist Entries and/or votes will be void. All Entries (including Finalist Entries) become property of Sponsor and will not be returned. CAUTION: ANY ATTEMPT TO DELIBERATELY DAMAGE ANY WEBSITE OR UNDERMINE THE LEGITIMATE OPERATION OF THE CONTEST IS A VIOLATION OF CRIMINAL AND CIVIL LAWS AND SHOULD SUCH AN ATTEMPT BE MADE, THE SPONSOR RESERVES THE RIGHT TO SEEK ANY AND ALL REMEDIES AVAILABLE FROM ANY SUCH PERSON(S) FOR THE ATTEMPT TO THE FULLEST EXTENT PERMITTED BY LAW.</p>
<p class="bolder" style="margin-top:5px;">10. Arbitration: </p>
<p>Except where prohibited by law, as a condition of participating in this Contest, participant agrees that (1) any and all disputes and causes of action arising out of or connected with this Contest, or any prizes awarded, shall be resolved individually, without resort to any form of class action, and exclusively by final and binding arbitration under the rules of the American Arbitration Association and held at the AAA regional office nearest the entrant; (2) the Federal Arbitration Act shall govern the interpretation, enforcement and all proceedings at such arbitration; and (3) judgment upon such arbitration award may be entered in any court having jurisdiction. Under no circumstances will participant be permitted to obtain awards for, and participant hereby waives all rights to claim, punitive, incidental or consequential damages, or any other damages, including attorneys' fees, other than entrant's actual out-of-pocket expenses (i.e., costs associated with participating in this Contest), and entrant further waives all rights to have damages multiplied or increased.</p>
<p class="bolder" style="margin-top:5px;">11. Choice of Law: </p>
<p>All issues and questions concerning the construction, validity, interpretation and enforceability of these Official Rules, or the rights and obligations of participant and Sponsor in connection with the Contest, shall be governed by, and construed in accordance with, the substantive laws of the State of New York, USA.</p>
<p class="bolder" style="margin-top:5px;">12. Winner&acute;s List: </p>
<p>For the names of the winners (available after 3/28/14), send a self-addressed, stamped envelope to be received by 5/31/14 to: FINAO Career Catapult Contest&ndash;c/o FINAO, 13024 Beverly Park Road, Suite 201, Mukilteo, WA 98275 </p>
<p class="bolder" style="margin-top:5px;">Sponsor/Administrator: </p>
<p>FINAO, 13024 Beverly Park Road, Suite 201, Mukilteo, WA 98275 </p>
 </div>

    </div>