$(function() {

    $.validator.setDefaults({
        // TODO Uncomment for AJAX
        // submitHandler: function () {
        //    alert( "Form successfully submitted!" );
        //}
    });

    $("#units-form").validate({
        rules: {
            u_name: {
                required: true,
                maxlength: 255
            },
            u_address1: {
                required: true,
                maxlength: 255
            },
            u_city: {
                required: true,
                maxlength: 255
            },
            u_state: {
                required: true,
                maxlength: 50
            },
            u_zip: {
                required: true,
                digits: true,
                maxlength: 10
            },
            u_phone: {
                required: false,
                digits: true,
                maxlength: 20
            },
            u_email: {
                required: false,
                email: true,
                maxlength: 255
            },
            u_website: {
                required: false,
                url: true,
                maxlength: 255
            },
            u_size: {
                required: false,
                maxlength: 11
            }
        },

        messages: {
            u_name: {
                required: 'Please enter a name.'
            },
            u_address1: {
                required: 'Please enter an address.'
            },
            u_city: {
                required: 'Please enter city.'
            },
            u_state: {
                required: 'Please select state.'
            },
            u_zip: {
                required: 'Please enter postal code.',
                digits: 'Please enter digits only.'
            },
            u_phone: {
                pattern: "Please enter phone number in format +12345678901"
            },
            u_email: {
                email: 'Please enter a <em>valid</em> email address.'
            },
            u_website: {
                url: 'Please enter a <em>valid</em> URL.'
            },
            u_size: {
                required: 'Please select size range.'
            }
        },

        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }

    });

    $("#accounts-form").validate({
        rules: {
            first_name: {
                required: true,
                maxlength: 50
            },
            last_name: {
                required: true,
                maxlength: 50
            },
            email: {
                required: true,
                maxlength: 254
            },
            phone: {
                required: false,
                digits: true,
                maxlength: 20
            }
        },

        messages: {
            first_name: {
                required: 'Please enter first name.'
            },
            last_name: {
                required: 'Please enter last name.'
            },
            email: {
                required: 'Please enter email.',
                email: 'Please enter a <em>valid</em> email address.'
            },
            u_phone: {
                digits: 'Please enter digits only.'
            }
        },

        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }

    });
});
