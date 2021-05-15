$(function() {

    $("#units-form").validate({
        rules: {
            u_name: {
                required: true,
                maxlength: 2
            },
            u_address1: {
                required: true
            },
            u_city: {
                required: true
            },
            u_state: {
                required: true
            },
            u_zip: {
                required: true,
                digits: true
            },
            u_phone: {
                required: false,
                digits: true
            },
            u_email: {
                required: false,
                email: true
            },
            u_website: {
                required: false,
                url: true
            },
            u_type: {
                required: false
            },
            u_size: {
                required: false
            }
        },

        messages: {
            u_name: {
                required: 'Please enter a name.',
                maxlength: 'Please less than 2.'
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
                digits: 'Please enter digits only.'
            },
            u_email: {
                email: 'Please enter a <em>valid</em> email address.'
            },
            u_website: {
                url: 'Please enter a <em>valid</em> URL.'
            },
            u_type: {
                required: 'Please select sector.'
            },
            u_size: {
                required: 'Please select size range.'
            }
        }

    });
});