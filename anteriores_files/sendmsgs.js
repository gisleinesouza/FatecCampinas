/**
* @ SendMsgs
* @author Asim Arif
* @version 1.0.0 
* @copyright (C) 2016 - 2017 at http://www.sendmsgs.com. All rights reserved.
* @visit http://www.sendmsgs.com for support
* @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
**/

/*
*   Function to load the script dynamically in head or footer
**/
function loadScript(url, position='head'){

    var script = document.createElement("script")
    script.type = "text/javascript";
    script.src = url;
    //load the script according to position
    if(position == 'head') {
        document.getElementsByTagName("head")[0].appendChild(script);
    }
    else {
        document.getElementsByTagName("body")[0].appendChild(script);
    }
}

jQuery(document).ready(function($){
    if(sendmsgs_position == undefined || sendmsgs_position == null || sendmsgs_position == '')
    {
        sendmsgs_position = 'head';
    }
    //console.log(sendmsgs_position);

    if(sendmsgs_url_1 != undefined && sendmsgs_url_1 != null && sendmsgs_url_1 != '')
    {
        loadScript(sendmsgs_url_1, sendmsgs_position);
    }

    if(sendmsgs_url_2 != undefined && sendmsgs_url_2 != null && sendmsgs_url_2 != '')
    {
        loadScript(sendmsgs_url_2, sendmsgs_position);
    }

    if(sendmsgs_url_3 != undefined && sendmsgs_url_3 != null && sendmsgs_url_3 != '')
    {
        loadScript(sendmsgs_url_3, sendmsgs_position);
    } 
});