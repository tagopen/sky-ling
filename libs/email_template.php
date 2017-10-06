<?php
  class NewsLetterClass {
    public $body = '';
    function generateHTMLLetter ($data, $answers, $user_answers) {
      $this->body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" style="background:#f3f3f3!important"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width"><title>My Basic Email Template Subject</title><style>@media only screen{html{min-height:100%;background:#f3f3f3}}@media only screen and (max-width:488px){.small-float-center{margin:0 auto!important;float:none!important;text-align:center!important}.small-text-center{text-align:center!important}.small-text-left{text-align:left!important}.small-text-right{text-align:right!important}}@media only screen and (max-width:488px){.hide-for-large{display:block!important;width:auto!important;overflow:visible!important;max-height:none!important;font-size:inherit!important;line-height:inherit!important}}@media only screen and (max-width:488px){table.body table.container .hide-for-large,table.body table.container .row.hide-for-large{display:table!important;width:100%!important}}@media only screen and (max-width:488px){table.body table.container .callout-inner.hide-for-large{display:table-cell!important;width:100%!important}}@media only screen and (max-width:488px){table.body table.container .show-for-large{display:none!important;width:0;mso-hide:all;overflow:hidden}}@media only screen and (max-width:488px){table.body img{width:auto;height:auto}table.body center{min-width:0!important}table.body .container{width:95%!important}table.body .column,table.body .columns{height:auto!important;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;padding-left:16px!important;padding-right:16px!important}table.body .column .column,table.body .column .columns,table.body .columns .column,table.body .columns .columns{padding-left:0!important;padding-right:0!important}table.body .collapse .column,table.body .collapse .columns{padding-left:0!important;padding-right:0!important}td.small-1,th.small-1{display:inline-block!important;width:4.16667%!important}td.small-2,th.small-2{display:inline-block!important;width:8.33333%!important}td.small-3,th.small-3{display:inline-block!important;width:12.5%!important}td.small-4,th.small-4{display:inline-block!important;width:16.66667%!important}td.small-5,th.small-5{display:inline-block!important;width:20.83333%!important}td.small-6,th.small-6{display:inline-block!important;width:25%!important}td.small-7,th.small-7{display:inline-block!important;width:29.16667%!important}td.small-8,th.small-8{display:inline-block!important;width:33.33333%!important}td.small-9,th.small-9{display:inline-block!important;width:37.5%!important}td.small-10,th.small-10{display:inline-block!important;width:41.66667%!important}td.small-11,th.small-11{display:inline-block!important;width:45.83333%!important}td.small-12,th.small-12{display:inline-block!important;width:50%!important}td.small-13,th.small-13{display:inline-block!important;width:54.16667%!important}td.small-14,th.small-14{display:inline-block!important;width:58.33333%!important}td.small-15,th.small-15{display:inline-block!important;width:62.5%!important}td.small-16,th.small-16{display:inline-block!important;width:66.66667%!important}td.small-17,th.small-17{display:inline-block!important;width:70.83333%!important}td.small-18,th.small-18{display:inline-block!important;width:75%!important}td.small-19,th.small-19{display:inline-block!important;width:79.16667%!important}td.small-20,th.small-20{display:inline-block!important;width:83.33333%!important}td.small-21,th.small-21{display:inline-block!important;width:87.5%!important}td.small-22,th.small-22{display:inline-block!important;width:91.66667%!important}td.small-23,th.small-23{display:inline-block!important;width:95.83333%!important}td.small-24,th.small-24{display:inline-block!important;width:100%!important}.column td.small-24,.column th.small-24,.columns td.small-24,.columns th.small-24{display:block!important;width:100%!important}table.body td.small-offset-1,table.body th.small-offset-1{margin-left:4.16667%!important;Margin-left:4.16667%!important}table.body td.small-offset-2,table.body th.small-offset-2{margin-left:8.33333%!important;Margin-left:8.33333%!important}table.body td.small-offset-3,table.body th.small-offset-3{margin-left:12.5%!important;Margin-left:12.5%!important}table.body td.small-offset-4,table.body th.small-offset-4{margin-left:16.66667%!important;Margin-left:16.66667%!important}table.body td.small-offset-5,table.body th.small-offset-5{margin-left:20.83333%!important;Margin-left:20.83333%!important}table.body td.small-offset-6,table.body th.small-offset-6{margin-left:25%!important;Margin-left:25%!important}table.body td.small-offset-7,table.body th.small-offset-7{margin-left:29.16667%!important;Margin-left:29.16667%!important}table.body td.small-offset-8,table.body th.small-offset-8{margin-left:33.33333%!important;Margin-left:33.33333%!important}table.body td.small-offset-9,table.body th.small-offset-9{margin-left:37.5%!important;Margin-left:37.5%!important}table.body td.small-offset-10,table.body th.small-offset-10{margin-left:41.66667%!important;Margin-left:41.66667%!important}table.body td.small-offset-11,table.body th.small-offset-11{margin-left:45.83333%!important;Margin-left:45.83333%!important}table.body td.small-offset-12,table.body th.small-offset-12{margin-left:50%!important;Margin-left:50%!important}table.body td.small-offset-13,table.body th.small-offset-13{margin-left:54.16667%!important;Margin-left:54.16667%!important}table.body td.small-offset-14,table.body th.small-offset-14{margin-left:58.33333%!important;Margin-left:58.33333%!important}table.body td.small-offset-15,table.body th.small-offset-15{margin-left:62.5%!important;Margin-left:62.5%!important}table.body td.small-offset-16,table.body th.small-offset-16{margin-left:66.66667%!important;Margin-left:66.66667%!important}table.body td.small-offset-17,table.body th.small-offset-17{margin-left:70.83333%!important;Margin-left:70.83333%!important}table.body td.small-offset-18,table.body th.small-offset-18{margin-left:75%!important;Margin-left:75%!important}table.body td.small-offset-19,table.body th.small-offset-19{margin-left:79.16667%!important;Margin-left:79.16667%!important}table.body td.small-offset-20,table.body th.small-offset-20{margin-left:83.33333%!important;Margin-left:83.33333%!important}table.body td.small-offset-21,table.body th.small-offset-21{margin-left:87.5%!important;Margin-left:87.5%!important}table.body td.small-offset-22,table.body th.small-offset-22{margin-left:91.66667%!important;Margin-left:91.66667%!important}table.body td.small-offset-23,table.body th.small-offset-23{margin-left:95.83333%!important;Margin-left:95.83333%!important}table.body table.columns td.expander,table.body table.columns th.expander{display:none!important}table.body .right-text-pad,table.body .text-pad-right{padding-left:10px!important}table.body .left-text-pad,table.body .text-pad-left{padding-right:10px!important}table.menu{width:100%!important}table.menu td,table.menu th{width:auto!important;display:inline-block!important}table.menu.small-vertical td,table.menu.small-vertical th,table.menu.vertical td,table.menu.vertical th{display:block!important}table.menu[align=center]{width:auto!important}table.button.small-expand,table.button.small-expanded{width:100%!important}table.button.small-expand table,table.button.small-expanded table{width:100%}table.button.small-expand table a,table.button.small-expanded table a{text-align:center!important;width:100%!important;padding-left:0!important;padding-right:0!important}table.button.small-expand center,table.button.small-expanded center{min-width:0}}@media only screen and (max-width:488px){.menu{width:auto!important;margin:auto}}</style></head><body style="-moz-box-sizing:border-box;-ms-text-size-adjust:100%;-webkit-box-sizing:border-box;-webkit-text-size-adjust:100%;Margin:0;background:#f3f3f3!important;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;min-width:100%;padding:0;text-align:left;width:100%!important"><span class="preheader" style="color:#f3f3f3;display:none!important;font-size:1px;line-height:1px;max-height:0;max-width:0;mso-hide:all!important;opacity:0;overflow:hidden;visibility:hidden"></span><table class="body" style="Margin:0;background:#f3f3f3!important;border-collapse:collapse;border-spacing:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;height:100%;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;width:100%"><tr style="padding:0;text-align:left;vertical-align:top"><td class="center" align="center" valign="top" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word"><center data-parsed="" style="min-width:472px;width:100%"><table align="center" class="wrapper header float-center" style="Margin:0 auto;background:#fafafa;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:100%"><tr style="padding:0;text-align:left;vertical-align:top"><td class="wrapper-inner" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word"><table align="center" class="container" style="Margin:0 auto;background:0 0;border-collapse:collapse;border-spacing:0;margin:0 auto;padding:0;text-align:inherit;vertical-align:top;width:472px"><tbody><tr style="padding:0;text-align:left;vertical-align:top"><td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word"><table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%"><tbody><tr style="padding:0;text-align:left;vertical-align:top"><td height="16px" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:16px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&#xA0;</td></tr></tbody></table><table class="row collapse" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%"><tbody><tr style="padding:0;text-align:left;vertical-align:top"><th class="small-2 large-2 columns first" valign="middle" style="Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:0;padding-left:0;padding-right:0;text-align:left;width:47.33px"><table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%"><tr style="padding:0;text-align:left;vertical-align:top"><th style="Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left"><img class="small-float-center" src="/assets/img/logo.jpg" style="-ms-interpolation-mode:bicubic;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:auto"></th></tr></table></th><th class="small-22 large-22 columns last" valign="middle" style="Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:0;padding-left:0;padding-right:0;text-align:left;width:440.67px"><table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%"><tr style="padding:0;text-align:left;vertical-align:top"><th style="Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left"><p class="text-left header__text" style="Margin:0;Margin-bottom:10px;color:#000;font-family:Helvetica,Arial,sans-serif;font-size:8px;font-weight:400;letter-spacing:.3px;line-height:1.3;margin:0!important;margin-bottom:10px;padding:0;text-align:left">';

      foreach ($data["logo"] as $key => $value) {
        $this->body .= '<p class="text-left header__text" style="Margin:0;Margin-bottom:10px;color:#000;font-family:Helvetica,Arial,sans-serif;font-size:8px;font-weight:400;letter-spacing:.3px;line-height:1.3;margin:0!important;margin-bottom:10px;padding:0;text-align:left">' . $value . '</p>';
      }

      $this->body .= '</th></tr></table></th></tr></tbody></table><table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%"><tbody><tr style="padding:0;text-align:left;vertical-align:top"><td height="16px" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:16px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&#xA0;</td></tr></tbody></table></td></tr></tbody></table></td></tr></table><table align="center" class="wrapper main float-center" style="Margin:0 auto;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:100%"><tr style="padding:0;text-align:left;vertical-align:top"><td class="wrapper-inner" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word"><table background="assets/img/hero-header.jpg" align="center" class="bulletproof-bg image" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top"><tr valign="top" style="padding:0;text-align:left;vertical-align:top"><td background="/assets/img/image.jpg" bgcolor="#3f73e8" valign="top" align="center" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;background-position:center center!important;background-repeat:no-repeat!important;background-size:auto 100%!important;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:center;vertical-align:top;word-wrap:break-word"><!--[if gte mso 9]>            <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:680px;height: 279px; background-position: center center !important;">            <v:fill type="tile" src="/assets/img/image.jpg" color="#3f73e8" />            <v:textbox  inset="0,0,0,0">          <![endif]--><div><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top"><tr class="bulletproof-bg-spacer" style="padding:0;text-align:left;vertical-align:top"><td height="27" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;height:27px!important;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word"></td></tr><tr valign="top" style="padding:0;text-align:left;vertical-align:top"><td valign="top" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word"><table align="center" class="container transparent" style="Margin:0 auto;background:0 0!important;border-collapse:collapse;border-spacing:0;margin:0 auto;padding:0;text-align:inherit;vertical-align:top;width:472px"><tbody><tr style="padding:0;text-align:left;vertical-align:top"><td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word"><table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%"><tbody><tr style="padding:0;text-align:left;vertical-align:top"><td height="16px" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:16px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&#xA0;</td></tr></tbody></table><table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%"><tbody><tr style="padding:0;text-align:left;vertical-align:top"><th class="small-24 large-24 columns first last" style="Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:10px;padding-left:16px;padding-right:16px;text-align:left;width:456px"><table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%"><tr style="padding:0;text-align:left;vertical-align:top"><th style="Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left">';

      $this->body .= '<h1 class="text-center heading" style="Margin:0;Margin-bottom:10px;color:#fff;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:18px;margin:0;margin-bottom:10px;padding:0;text-align:center;word-wrap:normal"><strong>' . $data["heading"] . '</strong></h1>';

      $this->body .= '<p class="lead text-center" style="Margin:0;Margin-bottom:10px;color:#fff;font-family:Helvetica,Arial,sans-serif;font-size:13px;font-weight:400;line-height:18px;margin:0;margin-bottom:10px;padding:0;text-align:center">' . $data["answers"] . '</p>';

      $this->body .= '<p class="lead text-center" style="Margin:0;Margin-bottom:10px;color:#fff;font-family:Helvetica,Arial,sans-serif;font-size:13px;font-weight:400;line-height:18px;margin:0;margin-bottom:10px;padding:0;text-align:center">' . $data["level"]["text"] . '<strong class="status green" style="color:#41ff38">' . $data["level"]["value"] . '</strong></p>';

      $this->body .= '<p class="lead text-center" style="Margin:0;Margin-bottom:10px;color:#fff;font-family:Helvetica,Arial,sans-serif;font-size:13px;font-weight:400;line-height:18px;margin:0;margin-bottom:10px;padding:0;text-align:center">' . $data["descr"] . '</p>';

      $this->body .= '<center data-parsed="" style="min-width:424px;width:100%"><table class="button download text-center float-center" style="Margin:0 0 16px 0;border-collapse:collapse;border-spacing:0;float:none;margin:0 0 16px 0;padding:0;text-align:center;vertical-align:top;width:auto"><tr style="padding:0;text-align:left;vertical-align:top"><td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word"><table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%"><tr style="padding:0;text-align:left;vertical-align:top"><td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;background:#DB4A39!important;border:2px solid #2199e8;border-collapse:collapse!important;border-color:#DB4A39;color:#fefefe;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;hyphens:auto;line-height:18px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word"><a href="' . $data["btn"]["href"] . '" style="Margin:0;border:0 solid #2199e8;border-radius:3px;color:#fefefe;display:inline-block;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:700;line-height:1.3;margin:0;padding:8px 16px 8px 16px;text-align:left;text-decoration:none"><strong>' . $data["btn"]["text"] . '</strong></a></td></tr></table></td></tr></table></center>';

      $this->body .= '<table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%"><tbody><tr style="padding:0;text-align:left;vertical-align:top"><th class="small-4 large-5 columns first" style="Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:10px;padding-left:0!important;padding-right:0!important;text-align:left;width:20.83333%"><table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%"><tr style="padding:0;text-align:left;vertical-align:top"><th style="Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left"><table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%"><tbody><tr style="padding:0;text-align:left;vertical-align:top"><td height="8px" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:8px;font-weight:400;hyphens:auto;line-height:8px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&#xA0;</td></tr></tbody></table><img class="float-right" src="/assets/img/arrow-left.png" alt="" style="-ms-interpolation-mode:bicubic;clear:both;display:block;float:right;max-width:100%;outline:0;text-align:right;text-decoration:none;width:auto"></th></tr></table></th><th class="small-16 large-14 columns" style="Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:10px;padding-left:0!important;padding-right:0!important;text-align:left;width:58.33333%"><table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%"><tr style="padding:0;text-align:left;vertical-align:top"><th style="Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left"><p class="details text-center" style="Margin:0;Margin-bottom:10px;color:#fff;font-family:Helvetica,Arial,sans-serif;font-size:10px;font-weight:400;line-height:14px;margin:0;margin-bottom:10px;padding:0;text-align:center">' . $data["details"] . '</p></th></tr></table></th><th class="small-4 large-5 columns last" style="Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:10px;padding-left:0!important;padding-right:0!important;text-align:left;width:20.83333%"><table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%"><tr style="padding:0;text-align:left;vertical-align:top"><th style="Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left"><table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%"><tbody><tr style="padding:0;text-align:left;vertical-align:top"><td height="8px" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:8px;font-weight:400;hyphens:auto;line-height:8px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&#xA0;</td></tr></tbody></table><img class="float-left" src="/assets/img/arrow-right.png" alt="" style="-ms-interpolation-mode:bicubic;clear:both;display:block;float:left;max-width:100%;outline:0;text-align:left;text-decoration:none;width:auto"></th></tr></table></th></tr></tbody></table></th></tr></table></th></tr></tbody></table></td></tr></tbody></table></td></tr><tr class="bulletproof-bg-spacer" style="padding:0;text-align:left;vertical-align:top"><td height="15" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;height:15px!important;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word"></td></tr></table></div><!--[if gte mso 9]>          <p style="margin:0 !important;mso-hide:all !important;"><o:p xmlns:o="urn:schemas-microsoft-com:office:office">&nbsp;</o:p></p>          </v:textbox>          </v:rect>          <![endif]--></td></tr></table></td></tr></table>';

      $this->body .= '<table align="center" class="wrapper secondary float-center" style="Margin:0 auto;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:100%"><tr style="padding:0;text-align:left;vertical-align:top"><td class="wrapper-inner" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word"><table align="center" class="container questions" style="Margin:0 auto;background:0 0;border-collapse:collapse;border-spacing:0;margin:0 auto;padding:0;text-align:inherit;vertical-align:top;width:472px"><tbody><tr style="padding:0;text-align:left;vertical-align:top"><td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word"><table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%"><tbody><tr style="padding:0;text-align:left;vertical-align:top"><td height="16px" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:16px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&#xA0;</td></tr></tbody></table>';

      $count = 0;
      foreach ($data["test"] as $key => $value) {
        $this->body .= '<table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%"><tbody><tr style="padding:0;text-align:left;vertical-align:top"><th class="small-24 large-24 columns first last" style="Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:10px;padding-left:16px;padding-right:16px;text-align:left;width:456px"><table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%"><tr style="padding:0;text-align:left;vertical-align:top"><th style="Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left"><p class="question" style="Margin:0;Margin-bottom:10px;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:13px;font-weight:400;line-height:18px;margin:0;margin-bottom:5px;padding:0;text-align:left"><strong>' . $count . '. ' . $value["question"] . '</strong></p><p class="answer" style="Margin:0;Margin-bottom:10px;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;margin-bottom:10px;padding:0;text-align:left">';

        if (strcasecmp ( $answers[$count], $user_answers[$count]) == 0) {
          $switchCorrectAnswer = true;
        } else {
          $switchCorrectAnswer = false;
        }

        if($user_answers[$count] != '') {
          foreach ($value["answers"] as $key2 => $value2) {

            if ( $switchCorrectAnswer ) {
              if (strcasecmp ( $key2, $user_answers[$count]) == 0) {
              $this->body .= '<small class="field correct" style="color:#0bc906;font-size:13px;line-height:15px;margin-right:15px">' . $value2 . '</small>';
              } else {
                $this->body .= '<small class="field" style="color:#000;font-size:13px;line-height:15px;margin-right:15px">' . $value2 . '</small>';
              }
            } elseif (!$switchCorrectAnswer) {
              if (strcasecmp ( $key2, $user_answers[$count]) == 0) {
                $this->body .= '<small class="field wrong" style="color:#e53935;font-size:13px;line-height:15px;margin-right:15px;text-decoration:underline">' . $value2 . '</small>';
              } elseif (strcasecmp ( $key2, $answers[$count]) == 0) {
                $this->body .= '<small class="field correct" style="color:#0bc906;font-size:13px;line-height:15px;margin-right:15px">' . $value2 . '</small>';
              } else {
                $this->body .= '<small class="field" style="color:#000;font-size:13px;line-height:15px;margin-right:15px">' . $value2 . '</small>';
              }

            }
          }
        } else {
          foreach ($value["answers"] as $key2 => $value2) {
            if (strcasecmp ( $key2, $answers[$count]) == 0) {
              $this->body .= '<small class="field correct" style="color:#0bc906;font-size:13px;line-height:15px;margin-right:15px">' . $value2 . '</small>';
              } else {
                $this->body .= '<small class="field" style="color:#000;font-size:13px;line-height:15px;margin-right:15px">' . $value2 . '</small>';
              }
          }
        }
        $this->body .= '</p></th></tr></table></th></tr></tbody></table>';
        $count++;
      }

      $this->body .= '</td></tr></tbody></table></td></tr></table>';


      $this->body .= '<table align="center" class="wrapper footer float-center" style="Margin:0 auto;background:#d7d7d7;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:100%"><tr style="padding:0;text-align:left;vertical-align:top"><td class="wrapper-inner" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word"><table align="center" class="container" style="Margin:0 auto;background:0 0;border-collapse:collapse;border-spacing:0;margin:0 auto;padding:0;text-align:inherit;vertical-align:top;width:472px"><tbody><tr style="padding:0;text-align:left;vertical-align:top"><td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word"><table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%"><tbody><tr style="padding:0;text-align:left;vertical-align:top"><td height="10px" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:10px;font-weight:400;hyphens:auto;line-height:10px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&#xA0;</td></tr></tbody></table><table class="row collapse" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%"><tbody><tr style="padding:0;text-align:left;vertical-align:top"><th class="small-24 large-24 columns first last" style="Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:10px;padding-left:0;padding-right:0;text-align:left;width:480px"><table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%"><tr style="padding:0;text-align:left;vertical-align:top"><th style="Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left"><table class="menu" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%"><tr style="padding:0;text-align:left;vertical-align:top"><td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word"><table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%"><tr style="padding:0;text-align:left;vertical-align:top"><th valign="middle" class="menu-item menu-item--first float-center" style="Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-bottom:0;padding-right:10px;padding-top:0;text-align:left!important"><a href="' . $data["email"]["href"] . '" style="Margin:0;color:#000!important;font-family:Helvetica,Arial,sans-serif;font-size:13px;font-weight:400;line-height:10px;margin:0;padding:0;text-align:left;text-decoration:none"><img class="float-left" src="/assets/img/email.jpg" alt="" style="-ms-interpolation-mode:bicubic;border:none;clear:both;display:block;float:left;margin-right:8px;max-width:100%;outline:0;text-align:left;text-decoration:none;width:auto">' . $data["email"]["text"] . '</a></th><th valign="middle" class="menu-item menu-item--last float-center" style="Margin:0 auto;color:#0a0a0a;float:none;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:10px;padding-bottom:0;padding-right:10px;padding-top:0;text-align:right!important"><a href="' . $data["unsubscribe"]["href"] . '" style="Margin:0;color:#939393!important;font-family:Helvetica,Arial,sans-serif;font-size:12px;font-weight:400;line-height:18px;margin:0;padding:0;text-align:left;text-decoration:underline">' . $data["unsubscribe"]["text"] . '</a></th></tr></table></td></tr></table></th></tr></table></th></tr></tbody></table></td></tr></tbody></table></td></tr></table></center></td></tr></table><!-- prevent Gmail on iOS font size manipulation --><div style="display:none;white-space:nowrap;font:15px courier;line-height:0">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div></body></html>';

      return $this->body;
    }
  }
?>
