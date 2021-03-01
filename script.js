$(document).ready(function () {
    $("form").validate({
        errorClass: "error",

        rules: {

            lname: "required",
            firstname: "required",
            phonenumer: {
                required: true,
                number: true
            },
            email: {
                required: true,
                email: true
            },
            password: "required",
            confirmPassword: "required",
        },

        messages: {
            lname: "Insert your lastname",
            firstname: "Insert your firstname",
            phonenumer: "Insert your phone number",
            email: "Insert your mail",
            password: "Insert your password ",
            confirmPassword: "Confirm your password",
        },

        submitHandler: function (form) {
            if ($("#form").valid())
            {
                form.submit();
            }
        }
    });
})

$(document).ready(function () {
    $("form").submit(function () {
        if (!verifyPassword()) {
            return false;
        }
    });
})

function verifyPassword() {
    if ($("#password").val() != $("#confirmPassword").val()) {
        alert("Password are different");
        return false;
    }
}