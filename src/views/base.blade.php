<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width"/>
	<title>{{ $email_title }}</title>
  <style type="text/css">
   /*////// RESET STYLES //////*/
   body, #bodyTable, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;font-family:'Source Sans Pro', 'TrebuchetMS', sans-serif;}
   table{border-collapse:collapse;}
   img, a img{border:0; outline:none; text-decoration:none;}
   h1, h2, h3, h4, h5, h6{margin:0; padding:0;}
   p{margin: 1em 0;}

   /*////// CLIENT-SPECIFIC STYLES //////*/
   .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail/Outlook.com to display emails at full width. */
   .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%;} /* Force Hotmail/Outlook.com to display line heights normally. */
   table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up. */
   #outlook a{padding:0;} /* Force Outlook 2007 and up to provide a "view in browser" message. */
   img{-ms-interpolation-mode: bicubic;} /* Force IE to smoothly render resized images. */
   body, table, td, p, a, li, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;} /* Prevent Windows- and Webkit-based mobile platforms from changing declared text sizes. */

   /*////// FRAMEWORK STYLES //////*/
   .flexibleContainerCell{padding-top:20px; padding-Right:20px; padding-Left:20px;}
   .flexibleImage{height:auto;}
   .bottomShim{padding-bottom:20px;}
   .imageContent, .imageContentLast{padding-bottom:20px;}
   .nestedContainerCell{padding-top:20px; padding-Right:20px; padding-Left:20px;}

   /*////// GENERAL STYLES //////*/
   body, #bodyTable{background-color:#F5F5F5;}
   #bodyCell{padding-top:40px; padding-bottom:40px;}
   #emailBody{background-color:#FFFFFF; border:1px solid #DDDDDD; border-collapse:separate; border-radius:4px;}
   h1, h2, h3, h4, h5, h6{color:#202020; font-family:'Source Sans Pro', 'TrebuchetMS', sans-serif; font-size:17px; line-height:125%; text-align:Left;}
   .textContent, .textContentLast{color:#404040; font-family:'Source Sans Pro', 'TrebuchetMS', sans-serif; font-size:15px; line-height:125%; text-align:Left; padding-bottom:20px;}
   .textContent a, .textContentLast a{color:#3d1866; text-decoration:underline;}
   .nestedContainer{background-color:#E5E5E5; border:1px solid #CCCCCC;}
   .emailButton{background-color:#3d1866; border-collapse:separate; border-radius:4px;}
   .emailButtonWarning{background-color:#f0ad4e; border-collapse:separate; border-radius:4px;}
   .emailButtonSecondary{background-color:#fb7900; border-collapse:separate; border-radius:4px;}
   .hidden {display:none;}
   .buttonContent{color:#FFFFFF; font-family:'Source Sans Pro', 'TrebuchetMS', sans-serif; font-size:17px; font-weight:bold; line-height:100%; padding:15px; text-align:center;}
   .buttonContent a{color:#FFFFFF; display:block; text-decoration:none;}
   .emailCalendar{background-color:#FFFFFF; border:1px solid #CCCCCC;}
   .emailCalendarMonth{background-color:#3d1866; color:#FFFFFF; font-family:'Source Sans Pro', 'TrebuchetMS', sans-serif; font-size:15px; font-weight:bold; padding-top:10px; padding-bottom:10px; text-align:center;}
   .emailCalendarDay{color:#3d1866; font-family:'Source Sans Pro', 'TrebuchetMS', sans-serif; font-size:60px; font-weight:bold; line-height:100%; padding-top:20px; padding-bottom:20px; text-align:center;}
   /*////// MOBILE STYLES //////*/
   @media only screen and (max-width: 480px){
   /*////// CLIENT-SPECIFIC STYLES //////*/
   body{width:100% !important; min-width:100% !important;} /* Force iOS Mail to render the email at full width. */

   /*////// FRAMEWORK STYLES //////*/
   /*
   CSS selectors are written in attribute
   selector format to prevent Yahoo Mail
   from rendering media query styles on
   desktop.
   */
   table[id="emailBody"], table[class="flexibleContainer"]{width:100% !important;}

   /*
   The following style rule makes any
   image classed with 'flexibleImage'
   fluid when the query activates.
   Make sure you add an inline max-width
   to those images to prevent them
   from blowing out.
   */
   img[class="flexibleImage"]{height:auto !important; width:100% !important;}

   /*
   Make buttons in the email span the
   full width of their container, allowing
   for left- or right-handed ease of use.
   */
   table[class="emailButton"]{width:100% !important;}
   td[class="buttonContent"]{padding:0 !important;}
   td[class="buttonContent"] a{padding:15px !important;}

   td[class="textContentLast"], td[class="imageContentLast"]{padding-top:20px !important;}

   /*////// GENERAL STYLES //////*/
   td[id="bodyCell"]{padding-top:10px !important; padding-Right:10px !important; padding-Left:10px !important;}
 }
</style>
        <!--
        	Outlook Conditional CSS

            These two style blocks target Outlook 2007 & 2010 specifically, forcing
            columns into a single vertical stack as on mobile clients. This is
            primarily done to avoid the 'page break bug' and is optional.

            More information here:
			http://templates.mailchimp.com/development/css/outlook-conditional-css
		-->
        <!--[if mso 12]>
            <style type="text/css">
            	.flexibleContainer{display:block !important; width:100% !important;}
            </style>
            <![endif]-->
        <!--[if mso 14]>
            <style type="text/css">
            	.flexibleContainer{display:block !important; width:100% !important;}
            </style>
            <![endif]-->
          </head>
          <body>
           <center>
            <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
             <tr>
              <td align="center" valign="top" id="bodyCell">
               <!-- EMAIL CONTAINER // -->
               <table border="0" cellpadding="0" cellspacing="0" width="600" id="emailBody">

                 @include('email_template::modules.col_2_image_r_text_l',
                  [
                  'title' => 'Imperial Net',
                  'content' => '',
                  'image_url' => 'https://s3.ics-assets.co.uk/master_images/purple_logo_on_transparent@1x.png'
                  ])

                  @yield('body')

                  @if(!isset($no_notice) || (isset($no_notice) && !$no_notice))
                    @include('email_template::modules.custom_start_well')
                    <tr>
                      <td colspan=2 valign="top" class="textContent">
                        Sent on {{ Carbon\Carbon::now()->timezone('Europe/London')->format('d/m/Y H:i') }}.
                        @if (Auth::check())
                        Email sent due to an action by {{ Auth::user()->name }}.
                        @endif
                      </td>
                    </tr>
                    @include('email_template::modules.custom_end_well')
                  @endif
                </table>
                <!-- // EMAIL CONTAINER -->
              </td>
            </tr>
          </table>
        </center>
      </body>
      </html>
