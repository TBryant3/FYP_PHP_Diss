$(document).ready(function () {
    "use strict";
    jQuery.validator.addMethod("lettersonly", function (value, element)
    {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "No Numbers Or Spaces Allowed");

    $('#contactForm').validate(
        {
            rules:
            {            
                usernameInput:
                {
                    required: true,
                    maxlength: 20,
                    minlength: 3,
                    lettersonly: false
                },
                
                emailInput:
                {
                    required: true,
                    email: true
                },

                subjectInput:
                {
                    required: true,
                    minlength: 7,
                    maxlength: 12,
                    digits: true
                }
            },

            messages:
            {
                usernameInput:
                {
                    required: "Please enter your account Username",
                    maxlength: "You have exceeded the character limit",
                    minlength: "Username too short"
                },
                
                email:
                {
                    required: "Please enter a valid email address"
                },
            },
            submitHandler: function (form)
            {
                form.submit();
            }
    });
});