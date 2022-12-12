		<?php
		include('config.php');
		session_start();

		$user_check=$_SESSION['login_user'];
		$acc_sql=mysql_query("SELECT*FROM Account WHERE ID='1'"); $ac=mysql_fetch_array($acc_sql);
		$entry_session=$ac['Entry Fee']; $pay_session=$ac['Payment_Fee'];

		$se_sql=mysql_query("SELECT*FROM Questions WHERE Id ='1'"); $ro=mysql_fetch_array($se_sql);

		$sea_sql=mysql_query("SELECT*FROM Questions WHERE ID=2");   $roa=mysql_fetch_array($sea_sql);
		
		$seb_sql=mysql_query("SELECT*FROM Questions WHERE ID='3'");	$rob=mysql_fetch_array($seb_sql);

		$sec_sql=mysql_query("SELECT*FROM Questions WHERE ID='4'");	$roc=mysql_fetch_array($sec_sql);

		$sed_sql=mysql_query("SELECT*FROM Questions WHERE ID='5'");	$rod=mysql_fetch_array($sed_sql);

		$see_sql=mysql_query("SELECT*FROM Questions WHERE ID='6'");	$roe=mysql_fetch_array($see_sql);

		$sef_sql=mysql_query("SELECT*FROM Questions WHERE ID='7'");	$rof=mysql_fetch_array($sef_sql);

		$seg_sql=mysql_query("SELECT*FROM Questions WHERE ID='8'");	$rog=mysql_fetch_array($seg_sql);

		$seh_sql=mysql_query("SELECT*FROM Questions WHERE ID='9'");	$roh=mysql_fetch_array($seh_sql);

		$sei_sql=mysql_query("SELECT*FROM Questions WHERE ID='10'");$roi=mysql_fetch_array($sei_sql);

		$sej_sql=mysql_query("SELECT*FROM Questions WHERE ID='11'");$roj=mysql_fetch_array($sej_sql);

		$sek_sql=mysql_query("SELECT*FROM Questions WHERE ID='12'");$rok=mysql_fetch_array($sek_sql);

		$sel_sql=mysql_query("SELECT*FROM Questions WHERE ID='13'");$rol=mysql_fetch_array($sel_sql);

		$sem_sql=mysql_query("SELECT*FROM Questions WHERE ID='14'");$rom=mysql_fetch_array($sem_sql);

		$sen_sql=mysql_query("SELECT*FROM Questions WHERE ID='15'");$ron=mysql_fetch_array($sen_sql);

		$seo_sql=mysql_query("SELECT*FROM Questions WHERE ID='16'");$roo=mysql_fetch_array($seo_sql);

		$sep_sql=mysql_query("SELECT*FROM Questions WHERE ID='17'");$rop=mysql_fetch_array($sep_sql);

		$seq_sql=mysql_query("SELECT*FROM Questions WHERE ID='18'");$roq=mysql_fetch_array($seq_sql);

		$ser_sql=mysql_query("SELECT*FROM Questions WHERE ID='19'");$ror=mysql_fetch_array($ser_sql);

		$set_sql=mysql_query("SELECT*FROM Questions WHERE ID='20'");$rot=mysql_fetch_array($set_sql);
		
		$seu_sql=mysql_query("SELECT*FROM Questions WHERE ID='21'");$rou=mysql_fetch_array($seu_sql);
		
		$sev_sql=mysql_query("SELECT*FROM Questions WHERE ID='22'");$rov=mysql_fetch_array($sev_sql);
		
		$sex_sql=mysql_query("SELECT*FROM Questions WHERE ID='23'");$rox=mysql_fetch_array($sex_sql);
		
		$sey_sql=mysql_query("SELECT*FROM Questions WHERE ID='24'");$roy=mysql_fetch_array($sey_sql);
		
		$sez_sql=mysql_query("SELECT*FROM Questions WHERE ID='25'");$roz=mysql_fetch_array($sez_sql);
		
		$saa_sql=mysql_query("SELECT*FROM Questions WHERE Id ='26'"); $raa=mysql_fetch_array($saa_sql);

		$sab_sql=mysql_query("SELECT*FROM Questions WHERE ID='27'");   $rab=mysql_fetch_array($sab_sql);
		
		$sac_sql=mysql_query("SELECT*FROM Questions WHERE ID='28'");  $rac=mysql_fetch_array($sac_sql);

		$sad_sql=mysql_query("SELECT*FROM Questions WHERE ID='29'");  $rad=mysql_fetch_array($sad_sql);

		$sae_sql=mysql_query("SELECT*FROM Questions WHERE ID='30'");  $rae=mysql_fetch_array($sae_sql);

		$saf_sql=mysql_query("SELECT*FROM Questions WHERE ID='31'");  $raf=mysql_fetch_array($saf_sql);

		$sag_sql=mysql_query("SELECT*FROM Questions WHERE ID='32'");  $rag=mysql_fetch_array($sag_sql);

		$sah_sql=mysql_query("SELECT*FROM Questions WHERE ID='33'");  $rah=mysql_fetch_array($sah_sql);

		$sai_sql=mysql_query("SELECT*FROM Questions WHERE ID='34'");  $rai=mysql_fetch_array($sai_sql);

		$saj_sql=mysql_query("SELECT*FROM Questions WHERE ID='35'");$raj=mysql_fetch_array($saj_sql);

		$sak_sql=mysql_query("SELECT*FROM Questions WHERE ID='36'");$rak=mysql_fetch_array($sak_sql);

		$sal_sql=mysql_query("SELECT*FROM Questions WHERE ID='37'");$ral=mysql_fetch_array($sal_sql);

		$sam_sql=mysql_query("SELECT*FROM Questions WHERE ID='38'");$ram=mysql_fetch_array($sam_sql);

		$san_sql=mysql_query("SELECT*FROM Questions WHERE ID='39'");$ran=mysql_fetch_array($san_sql);

		$sao_sql=mysql_query("SELECT*FROM Questions WHERE ID='40'");$rao=mysql_fetch_array($sao_sql);

		$sap_sql=mysql_query("SELECT*FROM Questions WHERE ID='41'");$rap=mysql_fetch_array($sap_sql);

		$saq_sql=mysql_query("SELECT*FROM Questions WHERE ID='42'");$raq=mysql_fetch_array($saq_sql);

		$sar_sql=mysql_query("SELECT*FROM Questions WHERE ID='43'");$rar=mysql_fetch_array($sar_sql);

		$sas_sql=mysql_query("SELECT*FROM Questions WHERE ID='44'");$ras=mysql_fetch_array($sas_sql);

		$sat_sql=mysql_query("SELECT*FROM Questions WHERE ID='45'");$rat=mysql_fetch_array($sat_sql);
		
		$sau_sql=mysql_query("SELECT*FROM Questions WHERE ID='46'");$rau=mysql_fetch_array($sau_sql);
		
		$sav_sql=mysql_query("SELECT*FROM Questions WHERE ID='47'");$rav=mysql_fetch_array($sav_sql);
		
		$sax_sql=mysql_query("SELECT*FROM Questions WHERE ID='48'");$rax=mysql_fetch_array($sax_sql);
		
		$say_sql=mysql_query("SELECT*FROM Questions WHERE ID='49'");$ray=mysql_fetch_array($say_sql);
		
		$saz_sql=mysql_query("SELECT*FROM Questions WHERE ID='50'");$raz=mysql_fetch_array($saz_sql);
		
		$sba_sql=mysql_query("SELECT*FROM sports WHERE ID='1'");$rba=mysql_fetch_array($sba_sql);
		
		$sbb_sql=mysql_query("SELECT*FROM sports WHERE ID='2'");$rbb=mysql_fetch_array($sbb_sql);
		
		$sbc_sql=mysql_query("SELECT*FROM sports WHERE ID='3'");$rbc=mysql_fetch_array($sbc_sql);
		
		$sbd_sql=mysql_query("SELECT*FROM sports WHERE ID='4'");$rbd=mysql_fetch_array($sbd_sql);
		
		$sbe_sql=mysql_query("SELECT*FROM sports WHERE ID='5'");$rbe=mysql_fetch_array($sbe_sql);
		
		$sbf_sql=mysql_query("SELECT*FROM sports WHERE ID='6'");$rbf=mysql_fetch_array($sbf_sql);
		
		$sbg_sql=mysql_query("SELECT*FROM sports WHERE ID='7'");$rbg=mysql_fetch_array($sbg_sql);
		
		$sbh_sql=mysql_query("SELECT*FROM sports WHERE ID='8'");$rbh=mysql_fetch_array($sbh_sql);
		
		$sbi_sql=mysql_query("SELECT*FROM sports WHERE ID='9'");$rbi=mysql_fetch_array($sbi_sql);
		
		$sbj_sql=mysql_query("SELECT*FROM sports WHERE ID='10'");$rbj=mysql_fetch_array($sbj_sql);
		
		$sbk_sql=mysql_query("SELECT*FROM sports WHERE ID='11'");$rbk=mysql_fetch_array($sbk_sql);
		
		$sbl_sql=mysql_query("SELECT*FROM sports WHERE ID='12'");$rbl=mysql_fetch_array($sbl_sql);
		
		$sbm_sql=mysql_query("SELECT*FROM sports WHERE ID='13'");$rbm=mysql_fetch_array($sbm_sql);
		
		$sbn_sql=mysql_query("SELECT*FROM sports WHERE ID='14'");$rbn=mysql_fetch_array($sbn_sql);
		
		$sbo_sql=mysql_query("SELECT*FROM sports WHERE ID='15'");$rbo=mysql_fetch_array($sbo_sql);
		
		$sbp_sql=mysql_query("SELECT*FROM sports WHERE ID='16'");$rbp=mysql_fetch_array($sbp_sql);
		
		$sbq_sql=mysql_query("SELECT*FROM sports WHERE ID='17'");$rbq=mysql_fetch_array($sbq_sql);
		
		$sbr_sql=mysql_query("SELECT*FROM sports WHERE ID='18'");$rbr=mysql_fetch_array($sbr_sql);
		
		$sbs_sql=mysql_query("SELECT*FROM sports WHERE ID='19'");$rbs=mysql_fetch_array($sbs_sql);
		
		$sbt_sql=mysql_query("SELECT*FROM sports WHERE ID='20'");$rbt=mysql_fetch_array($sbt_sql);

		$sbu_sql=mysql_query("SELECT*FROM sports WHERE ID='21'");$rbu=mysql_fetch_array($sbu_sql);
		
		$sbv_sql=mysql_query("SELECT*FROM sports WHERE ID='22'");$rbv=mysql_fetch_array($sbv_sql);
		
		$sbw_sql=mysql_query("SELECT*FROM sports WHERE ID='23'");$rbw=mysql_fetch_array($sbw_sql);
		
		$sbx_sql=mysql_query("SELECT*FROM sports WHERE ID='24'");$rbx=mysql_fetch_array($sbx_sql);
		
		$sby_sql=mysql_query("SELECT*FROM sports WHERE ID='25'");$rby=mysql_fetch_array($sby_sql);
		
		
		

		$ses_sql=mysql_query("SELECT Username, Fname,Lname,Email,Sex,ACCT_BALANCE,Level,Mode,joindate FROM members_profile WHERE username='$user_check'");

		$row=mysql_fetch_array($ses_sql);

		$login_session=$row['Username'];  $Fname_session=$row['Fname'];  $Lname_session=$row['Lname'];  $Email_session=$row['Email'];  $Sex_session=$row['Sex'];

		$Acct_session=$row['ACCT_BALANCE']; $Level_session=$row['Level']; $Mode_session=$row['Mode']; 	$joindate_session=$row['joindate'];

		$q_session=$ro['CurrentQUIZ'];		$A1_session=$ro['Answer'];  $B1_session=$ro['Answer1'];    $C1_session=$ro['Answer2'];  	$D1_session=$ro['Answer3'];
		$qa_session=$roa['CurrentQUIZ'];	$A2_session=$roa['Answer']; $B2_session=$roa['Answer1'];   $C2_session=$roa['Answer2']; 	$D2_session=$roa['Answer3'];
		$qb_session=$rob['CurrentQUIZ']; 	$A3_session=$rob['Answer']; $B3_session=$rob['Answer1'];   $C3_session=$rob['Answer2']; 	$D3_session=$rob['Answer3'];
		$qc_session=$roc['CurrentQUIZ']; 	$A4_session=$roc['Answer']; $B4_session=$roc['Answer1'];   $C4_session=$roc['Answer2']; 	$D4_session=$roc['Answer3'];
		$qd_session=$rod['CurrentQUIZ'];	$A5_session=$rod['Answer']; $B5_session=$rod['Answer1'];   $C5_session=$rod['Answer2']; 	$D5_session=$rod['Answer3'];
		$qe_session=$roe['CurrentQUIZ'];	$A6_session=$roe['Answer'];  $B6_session=$roe['Answer1'];  $C6_session=$roe['Answer2'];  $D6_session=$roe['Answer3'];
		$qf_session=$rof['CurrentQUIZ'];	$A7_session=$rof['Answer'];  $B7_session=$rof['Answer1'];  $C7_session=$rof['Answer2'];  $D7_session=$rof['Answer3'];
		$qg_session=$rog['CurrentQUIZ'];	$A8_session=$rog['Answer'];  $B8_session=$rog['Answer1'];  $C8_session=$rog['Answer2'];  $D8_session=$rog['Answer3'];
		$qh_session=$roh['CurrentQUIZ'];	$A9_session=$roh['Answer'];  $B9_session=$roh['Answer1'];  $C9_session=$roh['Answer2'];  $D9_session=$roh['Answer3'];
		$qi_session=$roi['CurrentQUIZ'];	$A10_session=$roi['Answer']; $B10_session=$roi['Answer1']; $C10_session=$roi['Answer2']; $D10_session=$roi['Answer3'];
		$qj_session=$roj['CurrentQUIZ'];	$A11_session=$roj['Answer']; $B11_session=$roj['Answer1']; $C11_session=$roj['Answer2']; $D11_session=$roj['Answer3'];
		$qk_session=$rok['CurrentQUIZ'];	$A12_session=$rok['Answer']; $B12_session=$rok['Answer1']; $C12_session=$rok['Answer2']; $D12_session=$rok['Answer3'];
		$ql_session=$rol['CurrentQUIZ'];	$A13_session=$rol['Answer']; $B13_session=$rol['Answer1']; $C13_session=$rol['Answer2']; $D13_session=$rol['Answer3'];
		$qm_session=$rom['CurrentQUIZ'];	$A14_session=$rom['Answer']; $B14_session=$rom['Answer1']; $C14_session=$rom['Answer2']; $D14_session=$rom['Answer3'];
		$qn_session=$ron['CurrentQUIZ'];	$A15_session=$ron['Answer']; $B15_session=$ron['Answer1']; $C15_session=$ron['Answer2']; $D15_session=$ron['Answer3'];
		$qo_session=$roo['CurrentQUIZ'];	$A16_session=$roo['Answer']; $B16_session=$roo['Answer1']; $C16_session=$roo['Answer2']; $D16_session=$roo['Answer3'];
		$qp_session=$rop['CurrentQUIZ'];	$A17_session=$rop['Answer']; $B17_session=$rop['Answer1']; $C17_session=$rop['Answer2']; $D17_session=$rop['Answer3'];
		$qq_session=$roq['CurrentQUIZ'];	$A18_session=$roq['Answer']; $B18_session=$roq['Answer1']; $C18_session=$roq['Answer2']; $D18_session=$roq['Answer3'];
		$qr_session=$ror['CurrentQUIZ'];	$A19_session=$ror['Answer']; $B19_session=$ror['Answer1']; $C19_session=$ror['Answer2']; $D19_session=$ror['Answer3'];
		$qt_session=$rot['CurrentQUIZ'];	$A20_session=$rot['Answer']; $B20_session=$rot['Answer1']; $C20_session=$rot['Answer2']; $D20_session=$rot['Answer3'];
		$qu_session=$rou['CurrentQUIZ'];	$A21_session=$rou['Answer']; $B21_session=$rou['Answer1']; $C21_session=$rou['Answer2']; $D21_session=$rou['Answer3'];
		$qv_session=$rov['CurrentQUIZ'];	$A22_session=$rov['Answer']; $B22_session=$rov['Answer1']; $C22_session=$rov['Answer2']; $D22_session=$rov['Answer3'];
		$qx_session=$rox['CurrentQUIZ'];	$A23_session=$rox['Answer']; $B23_session=$rox['Answer1']; $C23_session=$rox['Answer2']; $D23_session=$rox['Answer3'];
		$qy_session=$roy['CurrentQUIZ'];	$A24_session=$roy['Answer']; $B24_session=$roy['Answer1']; $C24_session=$roy['Answer2']; $D24_session=$roy['Answer3'];
		$qz_session=$roz['CurrentQUIZ'];	$A25_session=$roz['Answer']; $B25_session=$roz['Answer1']; $C25_session=$roz['Answer2']; $D25_session=$roz['Answer3'];
		$a_session=$raa['CurrentQUIZ'];		$A26_session=$raa['Answer'];  $B26_session=$raa['Answer1']; $C26_session=$raa['Answer2']; $D26_session=$raa['Answer3'];
		$aa_session=$rab['CurrentQUIZ'];	$A27_session=$rab['Answer']; $B27_session=$rab['Answer1'];  $C27_session=$rab['Answer2']; $D27_session=$rab['Answer3'];
		$ab_session=$rac['CurrentQUIZ']; 	$A28_session=$rac['Answer']; $B28_session=$rac['Answer1'];   $C28_session=$rac['Answer2']; $D28_session=$rac['Answer3'];
		$ac_session=$rad['CurrentQUIZ']; 	$A29_session=$rad['Answer']; $B29_session=$rad['Answer1'];   $C29_session=$rad['Answer2']; $D29_session=$rad['Answer3'];
		$ad_session=$rae['CurrentQUIZ'];	$A30_session=$rae['Answer']; $B30_session=$rae['Answer1'];   $C30_session=$rae['Answer2']; $D30_session=$rae['Answer3'];
		$ae_session=$raf['CurrentQUIZ'];	$A31_session=$raf['Answer'];  $B31_session=$raf['Answer1'];  $C31_session=$raf['Answer2']; $D31_session=$raf['Answer3'];
		$af_session=$rag['CurrentQUIZ'];	$A32_session=$rag['Answer'];  $B32_session=$rag['Answer1'];  $C32_session=$rag['Answer2']; $D32_session=$rag['Answer3'];
		$ag_session=$rah['CurrentQUIZ'];	$A33_session=$rah['Answer'];  $B33_session=$rah['Answer1'];  $C33_session=$rah['Answer2']; $D33_session=$rah['Answer3'];
		$ah_session=$rai['CurrentQUIZ'];	$A34_session=$rai['Answer'];  $B34_session=$rai['Answer1'];  $C34_session=$rai['Answer2']; $D34_session=$rai['Answer3'];
		$ai_session=$raj['CurrentQUIZ'];	$A35_session=$raj['Answer']; $B35_session=$raj['Answer1']; $C35_session=$raj['Answer2']; $D35_session=$raj['Answer3'];
		$aj_session=$rak['CurrentQUIZ'];	$A36_session=$rak['Answer']; $B36_session=$rak['Answer1']; $C36_session=$rak['Answer2']; $D36_session=$rak['Answer3'];
		$ak_session=$ral['CurrentQUIZ'];	$A37_session=$ral['Answer']; $B37_session=$ral['Answer1']; $C37_session=$ral['Answer2']; $D37_session=$ral['Answer3'];
		$al_session=$ram['CurrentQUIZ'];	$A38_session=$ram['Answer']; $B38_session=$ram['Answer1']; $C38_session=$ram['Answer2']; $D38_session=$ram['Answer3'];
		$am_session=$ran['CurrentQUIZ'];	$A39_session=$ran['Answer']; $B39_session=$ran['Answer1']; $C39_session=$ran['Answer2']; $D39_session=$ran['Answer3'];
		$an_session=$rao['CurrentQUIZ'];	$A40_session=$rao['Answer']; $B40_session=$rao['Answer1']; $C40_session=$rao['Answer2']; $D40_session=$rao['Answer3'];
		$ao_session=$rap['CurrentQUIZ'];	$A41_session=$rap['Answer']; $B41_session=$rap['Answer1']; $C41_session=$rap['Answer2']; $D41_session=$rap['Answer3'];
		$ap_session=$raq['CurrentQUIZ'];	$A42_session=$raq['Answer']; $B42_session=$raq['Answer1']; $C42_session=$raq['Answer2']; $D42_session=$raq['Answer3'];
		$aq_session=$rar['CurrentQUIZ'];	$A43_session=$rar['Answer']; $B43_session=$rar['Answer1']; $C43_session=$rar['Answer2']; $D43_session=$rar['Answer3'];
		$ar_session=$ras['CurrentQUIZ'];	$A44_session=$ras['Answer']; $B44_session=$ras['Answer1']; $C44_session=$ras['Answer2']; $D44_session=$ras['Answer3'];
		$at_session=$rat['CurrentQUIZ'];	$A45_session=$rat['Answer']; $B45_session=$rat['Answer1']; $C45_session=$rat['Answer2']; $D45_session=$rat['Answer3'];
		$au_session=$rau['CurrentQUIZ'];	$A46_session=$rau['Answer']; $B46_session=$rau['Answer1']; $C46_session=$rau['Answer2']; $D46_session=$rau['Answer3'];
		$av_session=$rav['CurrentQUIZ'];	$A47_session=$rav['Answer']; $B47_session=$rav['Answer1']; $C47_session=$rav['Answer2']; $D47_session=$rav['Answer3'];
		$ax_session=$rax['CurrentQUIZ'];	$A48_session=$rax['Answer']; $B48_session=$rax['Answer1']; $C48_session=$rax['Answer2']; $D48_session=$rax['Answer3'];
		$ay_session=$ray['CurrentQUIZ'];	$A49_session=$ray['Answer']; $B49_session=$ray['Answer1']; $C49_session=$ray['Answer2']; $D49_session=$ray['Answer3'];
		$az_session=$raz['CurrentQUIZ'];	$A50_session=$raz['Answer']; $B50_session=$raz['Answer1']; $C50_session=$raz['Answer2']; $D50_session=$raz['Answer3'];
		
		$ba_session=$rba['Questions'];		$A51_session=$rba['Answer']; $B51_session=$rba['Answer1']; $C51_session=$rba['Answer2']; $D51_session=$rba['Answer3'];
		$bb_session=$rbb['Questions'];		$A52_session=$rbb['Answer']; $B52_session=$rbb['Answer1']; $C52_session=$rbb['Answer2']; $D52_session=$rbb['Answer3'];
		$bc_session=$rbc['Questions'];		$A53_session=$rbc['Answer']; $B53_session=$rbc['Answer1']; $C53_session=$rbc['Answer2']; $D53_session=$rbc['Answer3'];
		$bd_session=$rbd['Questions'];		$A54_session=$rbd['Answer']; $B54_session=$rbd['Answer1']; $C54_session=$rbd['Answer2']; $D54_session=$rbd['Answer3'];
		$be_session=$rbe['Questions'];		$A55_session=$rbe['Answer']; $B55_session=$rbe['Answer1']; $C55_session=$rbe['Answer2']; $D55_session=$rbe['Answer3'];
		
		$bf_session=$rbf['Questions'];		$A56_session=$rbf['Answer']; $B56_session=$rbf['Answer1']; $C56_session=$rbf['Answer2']; $D56_session=$rbf['Answer3'];
		$bg_session=$rbg['Questions'];		$A57_session=$rbg['Answer']; $B57_session=$rbg['Answer1']; $C57_session=$rbg['Answer2']; $D57_session=$rbg['Answer3'];
		$bh_session=$rbh['Questions'];		$A58_session=$rbh['Answer']; $B58_session=$rbh['Answer1']; $C58_session=$rbh['Answer2']; $D58_session=$rbh['Answer3'];
		$bi_session=$rbi['Questions'];		$A59_session=$rbi['Answer']; $B59_session=$rbi['Answer1']; $C59_session=$rbi['Answer2']; $D59_session=$rbi['Answer3'];
		$bj_session=$rbj['Questions'];		$A60_session=$rbj['Answer']; $B60_session=$rbj['Answer1']; $C60_session=$rbj['Answer2']; $D60_session=$rbj['Answer3'];
		
		$bk_session=$rbk['Questions'];		$A61_session=$rbk['Answer']; $B61_session=$rbk['Answer1']; $C61_session=$rbk['Answer2']; $D61_session=$rbk['Answer3'];
		$bl_session=$rbl['Questions'];		$A62_session=$rbl['Answer']; $B62_session=$rbl['Answer1']; $C62_session=$rbl['Answer2']; $D62_session=$rbl['Answer3'];
		$bm_session=$rbm['Questions'];		$A63_session=$rbm['Answer']; $B63_session=$rbm['Answer1']; $C63_session=$rbm['Answer2']; $D63_session=$rbm['Answer3'];
		$bn_session=$rbn['Questions'];		$A64_session=$rbn['Answer']; $B64_session=$rbn['Answer1']; $C64_session=$rbn['Answer2']; $D64_session=$rbn['Answer3'];
		$bo_session=$rbo['Questions'];		$A65_session=$rbo['Answer']; $B65_session=$rbo['Answer1']; $C65_session=$rbo['Answer2']; $D65_session=$rbo['Answer3'];
		
		$bp_session=$rbp['Questions'];		$A66_session=$rbp['Answer']; $B66_session=$rbp['Answer1']; $C66_session=$rbp['Answer2']; $D66_session=$rbp['Answer3'];
		$bq_session=$rbq['Questions'];		$A67_session=$rbq['Answer']; $B67_session=$rbq['Answer1']; $C67_session=$rbq['Answer2']; $D67_session=$rbq['Answer3'];
		$br_session=$rbr['Questions'];		$A68_session=$rbr['Answer']; $B68_session=$rbr['Answer1']; $C68_session=$rbr['Answer2']; $D68_session=$rbr['Answer3'];
		$bs_session=$rbs['Questions'];		$A69_session=$rbs['Answer']; $B69_session=$rbs['Answer1']; $C69_session=$rbs['Answer2']; $D69_session=$rbs['Answer3'];
		$bt_session=$rbt['Questions'];		$A70_session=$rbt['Answer']; $B70_session=$rbt['Answer1']; $C70_session=$rbt['Answer2']; $D70_session=$rbt['Answer3'];
		
		$bu_session=$rbu['Questions'];		$A71_session=$rbu['Answer']; $B71_session=$rbu['Answer1']; $C71_session=$rbu['Answer2']; $D71_session=$rbu['Answer3'];
		$bv_session=$rbv['Questions'];		$A72_session=$rbv['Answer']; $B72_session=$rbv['Answer1']; $C72_session=$rbv['Answer2']; $D72_session=$rbv['Answer3'];
		$bw_session=$rbw['Questions'];		$A73_session=$rbw['Answer']; $B73_session=$rbw['Answer1']; $C73_session=$rbw['Answer2']; $D73_session=$rbw['Answer3'];
		$bx_session=$rbx['Questions'];		$A74_session=$rbx['Answer']; $B74_session=$rbx['Answer1']; $C74_session=$rbx['Answer2']; $D74_session=$rbx['Answer3'];
		$by_session=$rby['Questions'];		$A75_session=$rby['Answer']; $B75_session=$rby['Answer1']; $C75_session=$rby['Answer2']; $D75_session=$rby['Answer3'];
		
		
		
		if(!isset($login_session))
		{
		header("location:Register.php");
		}

		?>
