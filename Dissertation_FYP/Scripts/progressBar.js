//$(document).ready(function ()
//{
    
//});







////Namespace of 'fyp
//$.widget("fyp.progressbar", {

//    // Default options.
//     options:
//     {
//        value: 0
//     },
//        //Private Function for creating the progress output
//     _create: function ()
//     {
//        var progress = this.options.value + "%";
//        this.element
//            .addClass("progressBar")
//            .text(progress);
//     },
     
//       //Public Function to initialise the value of the progress bar
//    value: function (value)
//    {
//        if (value === undefined)
//        {
//            return this.options.value;
//        }
//        this.options.value = this._constrain(value);
//        var progress = this.options.value + "%";
//        this.element.text(progress);
            
//    },
//    //Private function to ensure thge percentage doesnt exceed the necessary parameters
//    _constrain: function (value) {
//         if (value > 100) {
//             value = 100;
//         }
//         if (value < 0) {
//             value = 0;
//         }
//         return value;
//    }
//});