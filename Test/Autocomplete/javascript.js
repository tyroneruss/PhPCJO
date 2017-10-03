/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var completeField;
var completeTable;
var autoRow;
var req;
var isIE;

function init() {
    completeField = document.getElementById("complete-field");
}

function doCompletion() {
        var url = "autocomplete.php?action=complete&id=" + escape(completeField.value);
        req = initRequest();
        req.open("GET", url, true);
        req.onreadystatechange = callback;
        req.send(null);
}

function initRequest() {
    if (window.XMLHttpRequest) {
        if (navigator.userAgent.indexOf('MSIE') != -1) {
            isIE = true;
        }
        return new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        isIE = true;
        return new ActiveXObject("Microsoft.XMLHTTP");
    }
}

function callback() {
    if (req.readyState == 4) {
        if (req.status == 200) {
            parseMessages(req.responseXML);
        }
    }
}