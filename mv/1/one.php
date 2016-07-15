<?php

	//..	JSON Format of Resume
	$fileName = "resume.json";
	$json = file_get_contents($fileName);
	$json = utf8_encode($json);
	
	$data = json_decode($json); 
	//..	print("<PRE>"); print_r($data);			//	WHOLE DATA

?>
<style>
.name-heading {	padding:0 0 5px;color:#06649B;font-size:38px;font-weight:bold;font-family:Calibri;}
.heading-address {	padding:0 0 5px;color:#06649B;font-size:18px;font-weight:bold;font-family:Calibri;text-align:right;}
.section-heading {	padding:10px 0 5px;font-size:20px;font-family:Garamond;font-weight:bold;	}
.section-content {	padding:0 0 10px;font-size:14px;font-family:Tahoma;text-align:justify;	}
.section-content-header {	background:#C7C7C7;	}
.section-content-bold {	padding:0 0 10px;font-size:14px;font-family:Tahoma;font-weight:bold;text-align:justify;	}
.section-content-sub-heading {	padding:0 0 10px;font-size:14px;font-family:Tahoma;font-weight:bold;color:#06649B;	}

</style>

<table cellpadding="0" cellspacing="0" border="0" style="width:100%; background-color:#FFFFFF">
  	<tr>
    	<td align="center" valign="top" style="padding:15px 0">
        	<table cellspacing="0" cellpadding="0" border="0" align="center" style="background-color:#FFFFFF;border:3px solid #06649B;padding:20px;width:900px">
        		<tr>
          			<td valign="top" align="center">
                		<table cellspacing="0" cellpadding="0" border="0" style="border-bottom:4px solid #AAABB0;width:800px;">
							<tr>
								<td>&nbsp;</td>
								<td class="heading-address"><a href="<?php  echo $data->basics->profiles[0]->url; ?>" target="_blank"><img width="140px" height="25px" src="http://staqs.com/images/my_linkedin_profile_icon.png"></a></td>
							</tr>
							<tr>
                        		<td align="left" width="60%" class="name-heading"><?php  echo $data->basics->name; ?></td>
								<td align="right" width="40%" class="heading-address"><?php  echo $data->basics->phone."<br>".$data->basics->email; ?></td>
                        	</tr>
                        </table>
        			</td>
        		</tr>
        		<tr>
          			<td valign="top" align="center">
                    	<table cellspacing="0" cellpadding="0" border="0" style="width:800px;">
							<tr><td>&nbsp;</td></tr>
                            <tr>
                            	<td>
                            		<table cellspacing="0" cellpadding="0" border="0" width="100%">
                                      	<tr><td class="section-heading">OBJECTIVE</td></tr>
                                      	<tr><td class="section-content"><?php  echo nl2br($data->basics->objective); ?></td></tr>
                                    </table>
								</td>
                            </tr>
                        </table>
        			</td>
        		</tr>
        		<tr>
          			<td valign="top" align="center">
                    	<table cellspacing="0" cellpadding="0" border="0" style="width:800px;">
							<tr><td>&nbsp;</td></tr>
                            <tr>
                            	<td>
                            		<table cellspacing="0" cellpadding="0" border="0" width="100%">
                                      	<tr><td class="section-heading">PROFESSIONAL SKILLS</td></tr>
                                      	<tr><td class="section-content"><?php  echo nl2br($data->basics->summary); ?></td></tr>
                                    </table>
								</td>
                            </tr>
                        </table>
        			</td>
        		</tr>
				<tr>
          			<td valign="top" align="center">
                    	<table cellspacing="0" cellpadding="0" border="0" style="width:800px;">
							<tr><td>&nbsp;</td></tr>
                            <tr>
                            	<td>
                            		<table cellspacing="0" cellpadding="0" border="0" width="100%">
                                      	<tr><td class="section-heading" colspan="2">INTERNATIONAL CERTIFICATION</td></tr>
                                      	<tr>
											<td class="section-content-bold" width="20%">Name</td>
											<td class="section-content" width="80%"><?php  echo $data->certification[0]->name; ?></td>
										</tr>
                                      	<tr>
											<td class="section-content-bold" width="20%">Institution</td>
											<td class="section-content" width="80%"><?php  echo $data->certification[0]->summary; ?></td>
										</tr>
                                    </table>
								</td>
                            </tr>
                        </table>
        			</td>
        		</tr>
				<tr>
          			<td valign="top" align="center">
                    	<table cellspacing="0" cellpadding="0" border="0" style="width:800px;">
							<tr><td>&nbsp;</td></tr>
                            <tr>
                            	<td>
                            		<table cellspacing="0" cellpadding="0" border="0" width="100%">
                                      	<tr><td class="section-heading" colspan="2">RESEARCH PUBLICATION</td></tr>
                                      	<tr>
											<td class="section-content-bold" width="20%">Title</td>
											<td class="section-content" width="80%"><?php  echo $data->publications[0]->name; ?></td>
										</tr>
                                      	<tr>
											<td class="section-content-bold" width="20%">Publisher</td>
											<td class="section-content" width="80%"><?php  echo $data->publications[0]->publisher; ?></td>
										</tr>
										<tr><td>&nbsp;</td></tr>
										<tr><td class="section-content" width="80%" colspan="2"><?php  echo $data->publications[0]->summary; ?></tr>
										<tr><td class="section-content" width="80%" colspan="2"><a href="<?php  echo $data->publications[0]->website; ?>" target="_blank"><?php  echo $data->publications[0]->website; ?></a></tr>
                                    </table>
								</td>
                            </tr>
                        </table>
        			</td>
        		</tr>
				<tr>
          			<td valign="top" align="center">
                    	<table cellspacing="0" cellpadding="0" border="0" style="width:800px;">
							<tr><td>&nbsp;</td></tr>
                            <tr>
                            	<td>
                            		<table cellspacing="0" cellpadding="0" border="0" width="100%">
                                      	<tr><td class="section-heading" colspan="2">PROFESSIONAL EXPERIENCE</td></tr>
                                      	<tr>
											<td class="section-content-bold" width="20%">Recent</td>
											<td class="section-content-bold" width="80%"><?php  echo $data->work[0]->company."	--	[".date_format(date_create($data->work[0]->startDate), "F j, Y")."	".$data->work[0]->endDate."]"; ?></td>
										</tr>
                                      	<tr>
											<td class="section-content-bold">Designation</td>
											<td class="section-content-bold"><?php  echo $data->work[0]->position; ?></td>
										</tr>
                                      	<tr>
											<td class="section-content-bold">Responsibilities</td>
										</tr>
										<tr>
											<td class="section-content" colspan="2"><?php  echo nl2br($data->work[0]->summary); ?></td>
										</tr>
										<tr>
											<td class="section-content-sub-heading">Online projects</td>
										</tr>
										<tr>
											<td class="section-content" colspan="2"><?php  echo nl2br($data->work[0]->highlights[0]); ?></td>
										</tr>
										
                                      	<tr><td>&nbsp;</td></tr>
                                      	<tr><td>&nbsp;</td></tr>
                                      	<tr>
											<td class="section-content-bold" width="20%">Previous</td>
											<td class="section-content-bold" width="80%"><?php  echo $data->workLabel[0]->company."	--	[".date_format(date_create($data->workLabel[0]->startDate), "F j, Y")."	till	".date_format(date_create($data->workLabel[0]->endDate), "F j, Y")."]"; ?></td>
										</tr>
                                      	<tr>
											<td class="section-content-bold">Designation</td>
											<td class="section-content-bold"><?php  echo $data->workLabel[0]->position; ?></td>
										</tr>
                                      	<tr>
											<td class="section-content-bold">Responsibilities</td>
										</tr>
										<tr>
											<td class="section-content" colspan="2"><?php  echo nl2br($data->workLabel[0]->summary); ?></td>
										</tr>
										
                                      	<tr><td>&nbsp;</td></tr>
                                      	<tr><td>&nbsp;</td></tr>
										<tr>
											<td class="section-content-bold" width="20%">Previous</td>
											<td class="section-content-bold" width="80%"><?php  echo $data->additionalWork[0]->company."	--	[".date_format(date_create($data->additionalWork[0]->startDate), "F j, Y")."	till	".date_format(date_create($data->additionalWork[0]->endDate), "F j, Y")."]"; ?></td>
										</tr>
                                      	<tr>
											<td class="section-content-bold">Designation</td>
											<td class="section-content-bold"><?php  echo $data->additionalWork[0]->position; ?></td>
										</tr>
                                      	<tr>
											<td class="section-content-bold">Responsibilities</td>
										</tr>
										<tr>
											<td class="section-content" colspan="2"><?php  echo nl2br($data->additionalWork[0]->summary); ?></td>
										</tr>
										<tr>
											<td class="section-content-sub-heading">Online projects</td>
										</tr>
										<tr>
											<td class="section-content" colspan="2"><?php  echo nl2br($data->additionalWork[0]->highlights[0]); ?></td>
										</tr>
										
                                      	<tr><td>&nbsp;</td></tr>
                                      	<tr><td>&nbsp;</td></tr>
                                      	<tr>
											<td class="section-content-bold" width="20%">Freelance</td>
											<td class="section-content-bold" width="80%"><?php  echo $data->additionalWorkLabel[0]->company; ?></td>
										</tr>
                                      	<tr>
											<td class="section-content-bold">Designation</td>
											<td class="section-content-bold"><?php  echo $data->additionalWorkLabel[0]->position; ?></td>
										</tr>
                                      	<tr>
											<td class="section-content-bold">Responsibilities</td>
										</tr>
										<tr>
											<td class="section-content" colspan="2"><?php  echo nl2br($data->additionalWorkLabel[0]->summary); ?></td>
										</tr>
                                    </table>
								</td>
                            </tr>
                        </table>
        			</td>
        		</tr>
				<tr>
          			<td valign="top" align="center">
                    	<table cellspacing="0" cellpadding="0" border="0" style="width:800px;">
							<tr><td>&nbsp;</td></tr>
                            <tr>
                            	<td>
                            		<table cellspacing="0" cellpadding="0" border="0" width="100%">
                                      	<tr><td class="section-heading" colspan="4">EDUCATION</td></tr>
                                      	<tr>
											<td class="section-content-bold section-content-header" width="30%">Degree</td>
											<td class="section-content-bold section-content-header" width="20%">Duration</td>
											<td class="section-content-bold section-content-header" width="42%">Institution</td>
											<td class="section-content-bold section-content-header" width="8%">GPA</td>
										</tr>
                                      	<tr>
											<td class="section-content"><?php  echo $data->additionaleducation[0]->studyType."	(	".$data->additionaleducation[0]->area."	)"; ?></td>
											<td class="section-content"><?php echo $data->additionaleducation[0]->startDate."	To	".$data->additionaleducation[0]->endDate; ?></td>
											<td class="section-content"><?php  echo $data->additionaleducation[0]->institution; ?></td>
											<td class="section-content"><?php  echo $data->additionaleducation[0]->gpa; ?></td>
										</tr>
                                      	<tr>
											<td class="section-content"><?php  echo $data->education[0]->studyType."	(	".$data->education[0]->area."	)"; ?></td>
											<td class="section-content"><?php echo $data->education[0]->startDate."	To	".$data->education[0]->endDate; ?></td>
											<td class="section-content"><?php  echo $data->education[0]->institution; ?></td>
											<td class="section-content"><?php  echo $data->education[0]->gpa; ?></td>
										</tr>
                                    </table>
								</td>
                            </tr>
                        </table>
        			</td>
        		</tr>
        		<tr>
          			<td valign="top" align="center">
                    	<table cellspacing="0" cellpadding="0" border="0" style="width:800px;">
							<tr><td>&nbsp;</td></tr>
                            <tr>
                            	<td>
                            		<table cellspacing="0" cellpadding="0" border="0" width="100%">
                                      	<tr><td class="section-heading">PERSONAL INFORMATION</td></tr>
                                      	<tr><td class="section-content"><?php  echo nl2br($data->basics->highlights); ?></td></tr>
                                    </table>
								</td>
                            </tr>
                        </table>
        			</td>
        		</tr>
       		</table>
      	</td>
  	</tr>
</table>
