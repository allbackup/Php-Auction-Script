<?
	include "loggedin.inc.php";

	include "../includes/config.inc.php";
	include "../includes/messages.inc.php";
	include "../includes/countries.inc.php";
	

	if($action)
	{
		//-- Data check
		if(!$new_date || !$title || !$content)
		{
			$ERR = "ERR_112";
		}
		elseif(!ereg("^[0-9]{2}/[0-9]{2}/[0-9]{4}$",$new_date))
		{
			$ERR = "ERR_117";
		}
		else
		{
			$date = strval(substr($new_date,6,4).substr($new_date,3,2).substr($new_date,0,2));
		
			$query = "UPDATE PHPAUCTION_news SET title='".addslashes($title)."',content='".addslashes($content)."',new_date=$date,suspended=".intval($suspended)." WHERE id='$id'";
			$res = mysql_query($query);
			if(!$res)
			{
				$ERR = "ERR_001";
			}
			else
			{
				Header("Location: news.php");
				exit;
			}
		}
	}
	
	if(!$action)
	{
		//--
		$query = "SELECT * FROM PHPAUCTION_news WHERE id='$id'";
		$res = mysql_query($query);
		if(!$res)
		{	
			print $ERR_001;
			exit;
		}
		else
		{
			$title 		= mysql_result($res,0,"title");
			$content 	= mysql_result($res,0,"content");
			$suspended 	= mysql_result($res,0,"suspended");
			$tmp_date = mysql_result($res,$i,"new_date");
			$day = substr($tmp_date,6,2);
			$month = substr($tmp_date,4,2);
			$year = substr($tmp_date,0,4);
			$new_date = "$day/$month/$year";
		}
	}

	require "./header.php";
	require('../includes/styles.inc.php'); 
?>
<TABLE WIDTH="100%" BORDER="0" CELLPADDING="5" BGCOLOR="#FFFFFF">
<TR>
<TD>
	<TABLE WIDTH=100% CELPADDING=0 CELLSPACING=0 BORDER=0 BGCOLOR="#FFFFFF">
	<TR>
	 <TD ALIGN=CENTER COLSPAN=5>
		<BR>
		<B><? print $tlt_font.$MSG_337; ?></B>
		<BR>
	 </TD>
	</TR>	

	<TABLE WIDTH="100%" BORDER="0" CELLPADDING="5">

	<?
	if($ERR || $updated){
				print "<TR>
						<TD>
						</TD>
						<TD WIDTH=486>
						<FONT FACE=\"Verdana,Arial, Helvetica\" SIZE=2 COLOR=red>";
						if($$ERR) print $$ERR;
						if($updated) print "Auction data updated";					
						print "</TD>
						</TR>";
	}
	?>



<FORM NAME=addnew ACTION="<? print basename($PHP_SELF); ?>" METHOD="POST">

	<TR>
	  <TD WIDTH="204" VALIGN="top" ALIGN="right">
		<?print $std_font; ?>
		<? print "$MSG_522 *"; ?>
		</FONT>
	  </TD>
	  <TD WIDTH="486">
		<INPUT TYPE=text NAME=new_date SIZE=10 MAXLENGTH=10 VALUE="<? print Date("m/d/Y"); ?>"> (mm/dd/yyyy)
	  </TD>
	</TR>
	<TR>
	  <TD WIDTH="204" VALIGN="top" ALIGN="right">
		<?print $std_font; ?>
		<? print "$MSG_519 *"; ?>
		</FONT>
	  </TD>
	  <TD WIDTH="486">
		<INPUT TYPE=text NAME=title SIZE=40 MAXLENGTH=255 VALUE="<? print $title; ?>">
	  </TD>
	</TR>

	<TR>
	  <TD WIDTH="204" VALIGN="top" ALIGN="right">
		<? print $std_font; ?>
		<? print "$MSG_520 *"; ?>
		</FONT>
	  </TD>
	  <TD WIDTH="486">
		<TEXTAREA NAME=content COLS=45 ROWS=20><? print $content; ?></TEXTAREA>
	  </TD>
	</TR>	
	
	<TR>
	  <TD WIDTH="204" VALIGN="top" ALIGN="right">
		<? print $std_font; ?>
		<? print "$MSG_521 *"; ?>
		</FONT>
	  </TD>
	  <TD WIDTH="486">
		<INPUT TYPE=radio NAME=suspended value=0
		<?
			if($suspended == 0) print " CHECKED";
		?>
		> 
		<? print $std_font.$MSG_030; ?>
		<INPUT TYPE=radio NAME=suspended value=1
		<?
			if($suspended == 1) print " CHECKED";
		?>
		> <? print $std_font.$MSG_029; ?>
	  </TD>
	</TR>

	<TR>
	  <TD WIDTH="204" VALIGN="top" ALIGN="right">
		&nbsp;
	  </TD>
	  <TD WIDTH="486">
		<INPUT TYPE=submit>
	  </TD>
	</TR>


	</TABLE>
		<INPUT type="hidden" NAME="id" VALUE="<? echo $id; ?>">
		<INPUT type="hidden" NAME="offset" VALUE="<? echo $offset; ?>">
		<INPUT type="hidden" NAME="action" VALUE="addnew">
	</FORM>
	</center>
		 <BR>
		  <BR>
		  <CENTER>
		  <FONT face="Tahoma, Arial" size="2"><A HREF="admin.php" CLASS="navigation">Admin home</A> | 
		  <FONT face="Tahoma, Arial" size="2"><A
		  HREF="news.php?offset=<? print $offset; ?>
		  "CLASS="navigation"><? print $MSG_340; ?></A></FONT>
	  </CENTER>
	</TD>
	</TR>
	</TABLE>


</TD>
</TR>
</TABLE>
  
  <!-- Closing external table (header.php) -->
  </TD>
  </TR>
</TABLE>
  
  
  <? include "./footer.php"; ?>