<?php // $Revision: 1.1.1.1 $

/************************************************************************/
/* phpAdsNew 2                                                          */
/* ===========                                                          */
/*                                                                      */
/* Copyright (c) 2001 by the phpAdsNew developers                       */
/* http://sourceforge.net/projects/phpadsnew                            */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/


// Set character-set
$GLOBALS['phpAds_CharSet'] = "iso-8859-2";


// Set translation strings
$GLOBALS['strHome'] = "Home";
$GLOBALS['date_format'] = "%m/%d/%Y";
$GLOBALS['time_format'] = "%H:%i:%S";
$GLOBALS['strMySQLError'] = "MySQL-Error:";
$GLOBALS['strAdminstration'] = "Administrace";
$GLOBALS['strAddClient'] = "P�idat klienta";
$GLOBALS['strModifyClient'] = "Editovat klienta";
$GLOBALS['strDeleteClient'] = "Smazat klienta";
$GLOBALS['strViewClientStats'] = "Vid�t klientovu statistiku";
$GLOBALS['strClientName'] = "Klient";
$GLOBALS['strContact'] = "Kontakt";
$GLOBALS['strEMail'] = "EMail";
$GLOBALS['strViews'] = "BnrZobrazen�";
$GLOBALS['strClicks'] = "BnrKliknut�";
$GLOBALS['strTotalViews'] = "Celkem BnrZobrazen�";
$GLOBALS['strTotalClicks'] = "Celkem BnrKliknut�";
$GLOBALS['strCTR'] = "Click-Through Ratio";
$GLOBALS['strTotalClients'] = "Total clients";
$GLOBALS['strActiveClients'] = "Active clients";
$GLOBALS['strActiveBanners'] = "Active banners";
$GLOBALS['strLogout'] = "Logout";
$GLOBALS['strCreditStats'] = "Credit Stats";
$GLOBALS['strViewCredits'] = "Adview credits";
$GLOBALS['strClickCredits'] = "Adclick credits";
$GLOBALS['strPrevious'] = "Previous";
$GLOBALS['strNext'] = "Next";
$GLOBALS['strNone'] = "None";
$GLOBALS['strViewsPurchased'] = "BnrZobrazen� Zakoupeno";
$GLOBALS['strClicksPurchased'] = "BnrKliknut� Zakoupeno";
$GLOBALS['strDaysPurchased'] = "AdDays purchased";
$GLOBALS['strHTML'] = "HTML";
$GLOBALS['strAddSep'] = "Vypl�te bu� pole NAD nebo pole POD!";
$GLOBALS['strTextBelow'] = "Text pod obr�zkem";
$GLOBALS['strSubmit'] = "Poslat";
$GLOBALS['strUsername'] = "U�. Jm�no";
$GLOBALS['strPassword'] = "Heslo";
$GLOBALS['strBannerAdmin'] = "Administrace banner� pro";
$GLOBALS['strBannerAdminAcl'] = "Banner ACL adminstration for";
$GLOBALS['strNoBanners'] = "��dn� bannery";
$GLOBALS['strBanner'] = "Banner";
$GLOBALS['strCurrentBanner'] = "Sou�asn� banner";
$GLOBALS['strDelete'] = "Smazat";
$GLOBALS['strAddBanner'] = "P�idat nov� banner";
$GLOBALS['strModifyBanner'] = "Zm�nit banner";
$GLOBALS['strModifyBannerAcl'] = "Modify banner ACL";
$GLOBALS['strURL'] = "Odkazuje na URL (v�etn� http://)";
$GLOBALS['strKeyword'] = "Kl��ov� slovo";
$GLOBALS['strWeight'] = "Weight";
$GLOBALS['strAlt'] = "Alternativn� text";
$GLOBALS['strAccessDenied'] = "P��stup zam�tnut";
$GLOBALS['strPasswordWrong'] = "The password is not correct";
$GLOBALS['strNotAdmin'] = "You may not have enough privileges";
$GLOBALS['strClientAdded'] = "Klient byl p�id�n.";
$GLOBALS['strClientModified'] = "Klient byl zm�n�n.";
$GLOBALS['strClientDeleted'] = "Klient byl smaz�n.";
$GLOBALS['strBannerAdmin'] = "Administrace banner�";
$GLOBALS['strBannerAdded'] = "Banner byl p�id�n.";
$GLOBALS['strBannerModified'] = "Banner byl modifikov�n.";
$GLOBALS['strBannerDeleted'] = "Banner byl smaz�n";
$GLOBALS['strBannerChanged'] = "Banner byl zm�n�n";
$GLOBALS['strStats'] = "Statistika";
$GLOBALS['strDailyStats'] = "Denn� statistika";
$GLOBALS['strDetailStats'] = "Detailn� statistika";
$GLOBALS['strCreditStats'] = "Credit statistics";
$GLOBALS['strActive'] = "aktivn�";
$GLOBALS['strActivate'] = "Aktivovat";
$GLOBALS['strDeActivate'] = "De-aktivovat";
$GLOBALS['strAuthentification'] = "Autentizace";
$GLOBALS['strGo'] = "Jdi";
$GLOBALS['strLinkedTo'] = "odkazuje na";
$GLOBALS['strBannerID'] = "Banner-ID";
$GLOBALS['strClientID'] = "Klient ID";
$GLOBALS['strMailSubject'] = "phpAds Zpr�va";
$GLOBALS['strMailSubjectDeleted'] = "Deactivated Ads";
$GLOBALS['strMailHeader'] = "V�en� {contact},\n";
$GLOBALS['strMailBannerStats'] = "N�sleduj�c� data jsou statistikou pro {clientname}:";
$GLOBALS['strMailFooter'] = "S pozdravem,\n   {adminfullname}";
$GLOBALS['strLogMailSent'] = "[phpAds] Statistika �sp�n� odesl�na.";
$GLOBALS['strLogErrorClients'] = "[phpAds] Nepoda�ilo se z datab�ze st�hnout informace o klientech.";
$GLOBALS['strLogErrorBanners'] = "[phpAds] Nepoda�ilo se z datab�ze st�hnout bannery.";
$GLOBALS['strLogErrorViews'] = "[phpAds] Nepoda�ilo se z datab�ze st�hnout BnrZobrazen�.";
$GLOBALS['strLogErrorClicks'] = "[phpAds] Nepoda�ilo se z datab�ze st�hnout BnrKliknut�.";
$GLOBALS['strLogErrorDisactivate'] = "[phpAds] P�i pokusu o deaktivov�n� banneru se vyskytla chyba.";
$GLOBALS['strRatio'] = "Pom�r kliknut�";
$GLOBALS['strChooseBanner'] = "Vyberte pros�m typ zdroje banneru.";
$GLOBALS['strMySQLBanner'] = "Banner ulo�en v MySQL";
$GLOBALS['strWebBanner'] = "Banner stored on the Webserver";
$GLOBALS['strURLBanner'] = "Banner je ulo�en na URL";
$GLOBALS['strHTMLBanner'] = "HTML banner";
$GLOBALS['strNewBannerFile'] = "Soubor nov�ho banneru";
$GLOBALS['strNewBannerURL'] = "URL nov�ho banneru (v�etn� http://)";
$GLOBALS['strWidth'] = "���ka";
$GLOBALS['strHeight'] = "V��ka";
$GLOBALS['strTotalViews7Days'] = "Total AdViews in past 7 days";
$GLOBALS['strTotalClicks7Days'] = "Total AdClicks in past 7 days";
$GLOBALS['strAvgViews7Days'] = "Average AdViews in past 7 days";
$GLOBALS['strAvgClicks7Days'] = "Average AdClicks in past 7 days";
$GLOBALS['strTopTenHosts'] = "Top ten requesting hosts";
$GLOBALS['strConfirmDeleteClient'] = "Do you really want to delete this client?";
$GLOBALS['strClientIP'] = "Client IP";
$GLOBALS['strUserAgent'] = "User agent regexp";
$GLOBALS['strWeekDay'] = "Week day (0 - 6)";
$GLOBALS['strDomain'] = "Domain (excluding dot)";
$GLOBALS['strSource'] = "Source";
$GLOBALS['strTime'] = "Time";
$GLOBALS['strAllow'] = "Allow";
$GLOBALS['strDeny'] = "Deny";
$GLOBALS['strResetStats'] = "Reset Statistics";
$GLOBALS['strConfirmResetStats'] = "Do you really want to reset stats for this client ?";
$GLOBALS['strExpiration'] = "Expiration";
$GLOBALS['strNoExpiration'] = "No expiration date set";
$GLOBALS['strDaysLeft'] = "Days left";
$GLOBALS['strEstimated'] = "Estimated expiration";
$GLOBALS['strConfirm'] = "Are you sure ?";
$GLOBALS['strBannerNoStats'] = "No statistics available for this banner!";
$GLOBALS['strWeek'] = "Week";
$GLOBALS['strWeeklyStats'] = "Weekly statistics";
$GLOBALS['strWeekDay'] = "Weekday";
$GLOBALS['strDate'] = "Date";
$GLOBALS['strCTRShort'] = "CTR";
$GLOBALS['strDayShortCuts'] = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strShowWeeks'] = "Max. weeks to display";
$GLOBALS['strAll'] = "all";
$GLOBALS['strAvg'] = "Avg.";
$GLOBALS['strHourly'] = "Views/Clicks by hour";
$GLOBALS['strTotal'] = "Total";
$GLOBALS['strUnlimited'] = "Unlimited";
$GLOBALS['strSave'] = "Save";
$GLOBALS['strUp'] = "Up";
$GLOBALS['strDown'] = "Down";
$GLOBALS['strSaved'] ="was saved!";
$GLOBALS['strDeleted'] = "was deleted!";  
$GLOBALS['strMovedUp'] = "was moved up";
$GLOBALS['strMovedDown'] = "was moved down";
$GLOBALS['strUpdated'] = "was updated";
$GLOBALS['strACL'] = "ACL";
$GLOBALS['strNoMoveUp'] = "Can't move up first row";
$GLOBALS['strACLAdd'] = "Add new ".$GLOBALS['strACL'];
$GLOBALS['strACLExist'] = "Existing ".$GLOBALS['strACL'].":";
$GLOBALS['strLogin'] = "Login";
$GLOBALS['strPreferences'] = "Preferences";
$GLOBALS['strAllowClientModifyInfo'] = "Allow this user to modify his own client information";
$GLOBALS['strAllowClientModifyBanner'] = "Allow this user to modify his own banners";
$GLOBALS['strAllowClientAddBanner'] = "Allow this user to add his own banners";
$GLOBALS['strLanguage'] = "Language";
$GLOBALS['strDefault'] = "Default";
$GLOBALS['strErrorViews'] = "You must enter the number of views or select the unlimited box !";
$GLOBALS['strErrorNegViews'] = "Negative views are not allowed";
$GLOBALS['strErrorClicks'] =  "You must enter the number of clicks or select the unlimited box !";
$GLOBALS['strErrorNegClicks'] = "Negative clicks are not allowed";
$GLOBALS['strErrorDays'] = "You must enter the number of days or select the unlimited box !";
$GLOBALS['strErrorNegDays'] = "Negative days are not allowed";
$GLOBALS['strTrackerImage'] = "Tracker image:";

// New strings for version 2
$GLOBALS['strNavigation'] 				= "Navigation";
$GLOBALS['strShortcuts'] 				= "Shortcuts";
$GLOBALS['strDescription'] 				= "Description";
$GLOBALS['strClients'] 					= "Clients";
$GLOBALS['strID']				 		= "ID";
$GLOBALS['strOverall'] 					= "Overall";
$GLOBALS['strTotalBanners'] 			= "Total banners";
$GLOBALS['strToday'] 					= "Today";
$GLOBALS['strThisWeek'] 				= "This week";
$GLOBALS['strThisMonth'] 				= "This month";
$GLOBALS['strBasicInformation'] 		= "Basic information";
$GLOBALS['strContractInformation'] 		= "Contract information";
$GLOBALS['strLoginInformation'] 		= "Login information";
$GLOBALS['strPermissions'] 				= "Permissions";
$GLOBALS['strGeneralSettings']			= "General settings";
$GLOBALS['strSaveChanges']		 		= "Save Changes";
$GLOBALS['strCompact']					= "Compact";
$GLOBALS['strVerbose']					= "Verbose";
$GLOBALS['strOrderBy']					= "order by";
$GLOBALS['strShowAllBanners']	 		= "Show all banners";
$GLOBALS['strShowBannersNoAdClicks']	= "Show banners without AdClicks";
$GLOBALS['strShowBannersNoAdViews']		= "Show banners without AdViews";
$GLOBALS['strShowAllClients'] 			= "Show all clients";
$GLOBALS['strShowClientsActive'] 		= "Show clients with active banners";
$GLOBALS['strShowClientsInactive']		= "Show clients with inactive banners";
$GLOBALS['strSize']						= "Size";

$GLOBALS['strMonth'] 					= array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDontExpire']				= "Don't expire this client on a specific date";
$GLOBALS['strActivateNow'] 				= "Activate this client immediately";
$GLOBALS['strExpirationDate']			= "Expiration date";
$GLOBALS['strActivationDate']			= "Activation date";

$GLOBALS['strMailClientDeactivated'] 	= "Your banners have been disabled because";
$GLOBALS['strMailNothingLeft'] 			= "If you would like to continue advertising on our website, please feel free to contact us. We'd be glad to hear from you.";
$GLOBALS['strClientDeactivated']		= "This client is currently not active because";
$GLOBALS['strBeforeActivate']			= "the activation date has not yet been reached";
$GLOBALS['strAfterExpire']				= "the expiration date has been reached";
$GLOBALS['strNoMoreClicks']				= "the amount of AdClicks purchased are used";
$GLOBALS['strNoMoreViews']				= "the amount of AdViews purchased are used";

$GLOBALS['strBanners'] 					= "Banners";
$GLOBALS['strCampaigns']				= "Campaigns";
$GLOBALS['strCampaign']					= "Campaign";
$GLOBALS['strName']						= "Name";
$GLOBALS['strBannersWithoutCampaign']	= "Banners without a campaign";
$GLOBALS['strMoveToNewCampaign']		= "Move to a new campaign";
$GLOBALS['strCreateNewCampaign']		= "Create new campaign";
$GLOBALS['strEditCampaign']				= "Edit campaign";
$GLOBALS['strEdit']						= "Edit";
$GLOBALS['strCreate']					= "Create";
$GLOBALS['strUntitled']					= "Untitled";

$GLOBALS['strTotalCampaigns'] 			= "Total campaigns";
$GLOBALS['strActiveCampaigns'] 			= "Active campaigns";

$GLOBALS['strLinkedTo']					= "linked to";
$GLOBALS['strNoViewLoggedInInterval']   = "No views were logged in the last {interval} days";
$GLOBALS['strNoClickLoggedInInterval']  = "No clicks were logged in the last {interval} days";
$GLOBALS['strSendAdvertisingReport']	= "Send an advertising report via e-mail";
$GLOBALS['strNoDaysBetweenReports']		= "Number of days between reports";
$GLOBALS['strSendDeactivationWarning']  = "Send a warning when a campaign is deactivated";

$GLOBALS['strWarnClientTxt']			= "Click or View count is getting below {limit} for your banners. ";
$GLOBALS['strViewsClicksLow']			= "Ad views/clicks are low";

$GLOBALS['strDays']						= "Days";
$GLOBALS['strHistory']					= "History";
$GLOBALS['strAverage']					= "Average";
$GLOBALS['strDuplicateClientName']		= "The username you provided already exists, please enter a different username.";
$GLOBALS['strAllowClientDisableBanner'] = "Allow this user to de-activate his own banners";
$GLOBALS['strAllowClientActivateBanner'] = "Allow this user to activate his own banners";

$GLOBALS['strGenerateBannercode']		= "Generate Bannercode";
$GLOBALS['strChooseInvocationType']		= "Please choose the type of banner invocation";
$GLOBALS['strGenerate']					= "Generate";
$GLOBALS['strParameters']				= "Parameters";
$GLOBALS['strUniqueidentifier']			= "Unique identifier";
$GLOBALS['strFrameSize']				= "Frame size";
$GLOBALS['strBannercode']				= "Bannercode";

?>
