//Function for collapsing the Accordion information //
$(document).ready(function ()
{
    function collapse()
    {
        ///////////////////////HTML Accordions /////////////////////
        ////////////////////////// Set 1 //////////////////////////
        $("#accordionH1").accordion(
            {
                active: false,
                collapsible: true,
                event:"mouseover",
                heightStyle: true,
                animate: 150,
                icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}

            });
        $("#accordionH2").accordion(
            {
                active: false,
                collapsible: true,
                event:"mouseover",
                heightStyle: true,
                animate: 150,
                icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
            });




        // JavaScript Topic Page //
        $("#accordionP1").accordion(
            {
                active: 1,
                collapsible: true,
                event:"mouseover",
                heightStyle: true,
                animate: 500,
                icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}

            });
        $("#accordionP2").accordion(
            {
                active: false,
                collapsible: true,
                event:"mouseover",
                heightStyle: true,
                animate: 500,
                icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
            });
        $("#accordionP3").accordion(
            {
                active: false,
                collapsible: true,
                event:"mouseover",
                heightStyle: true,
                animate: 500,
                icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
            });
        // Set 2 //
        $("#accordionP4").accordion(
            {
                active: false,
                collapsible: true,
                event:"mouseover",
                heightStyle: true,
                animate: 500,
                icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
            });
        $("#accordionP5").accordion(
            {
                active: false,
                collapsible: true,
                event:"mouseover",
                heightStyle: true,
                animate: 500,
                icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
            });
        $("#accordionP6").accordion(
            {
                active: false,
                collapsible: true,
                event:"mouseover",
                heightStyle: true,
                animate: 500,
                icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
            });
        $("#accordionP7").accordion(
            {
                active: false,
                collapsible: true,
                event:"click",
                heightStyle: true,
                animate: 250,
                icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
            });
    }
    collapse();
});