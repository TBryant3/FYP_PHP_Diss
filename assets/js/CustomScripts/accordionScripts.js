//Function for collapsing the Accordion information //
function collapse()
{
    ///////////////////////HTML Accordions /////////////////////
    ////////////////////////// Set 1 //////////////////////////
    $("#accordionH1").accordion(
        {
            heightStyle: true,
            animate: 750,
            icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
        });
    $("#accordionH2").accordion(
        {
            heightStyle: true,
            animate: 750,
            icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
        });




    // JavaScript Topic Page //
    $("#accordionP1").accordion(
        {
            heightStyle: true,
            animate: 750,
            icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
        });
    $("#accordionP2").accordion(
        {
            heightStyle: true,
            animate: 750,
            icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
        });
    $("#accordionP3").accordion(
        {
            heightStyle: true,
            animate: 750,
            icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
        });
    // Set 2 //
    $("#accordionP4").accordion(
        {
            heightStyle: true,
            animate: 750,
            icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
        });
    $("#accordionP5").accordion(
        {
            heightStyle: true,
            animate: 750,
            icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
        });
    $("#accordionP6").accordion(
        {
            heightStyle: true,
            animate: 750,
            icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
        });
    $("#accordionP7").accordion(
        {
            heightStyle: true,
            animate: 250,
            icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
        });
}
collapse();