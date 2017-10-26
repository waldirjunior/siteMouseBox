/* ------------------------------------------------------------------------------
*
*  # Ace code editor
*
*  Specific JS code additions for editor_code.html page
*
*  Version: 1.0
*  Latest update: Aug 1, 2015
*
* ---------------------------------------------------------------------------- */

$(function() {

    // Javascript editor
    var js_editor = ace.edit("javascript_editor");
        js_editor.setTheme("ace/theme/monokai");
        js_editor.getSession().setMode("ace/mode/javascript");
        js_editor.setShowPrintMargin(false);


    // HTML editor
    var html_editor = ace.edit("html_editor");
        html_editor.setTheme("ace/theme/monokai");
        html_editor.getSession().setMode("ace/mode/html");
        html_editor.setShowPrintMargin(false);


    // CSS editor
    var css_editor = ace.edit("css_editor");
        css_editor.setTheme("ace/theme/monokai");
        css_editor.getSession().setMode("ace/mode/css");
        css_editor.setShowPrintMargin(false);




});
