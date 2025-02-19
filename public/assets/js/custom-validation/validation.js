(function($) {

    "use strict";

    $('#userForm').validate({
        rules: {
            name: {
                required:true
            },
            role_id: {
                required:true
            },
            gender: {
                required:true
            },
            password: {
                required:true
            },
            confirm_password: {
                required:true,
                equalTo: "#password"
            },
            email: {
                required:true
            },
            confirm_email: {
                required:true,
                equalTo: "#email"
            },
            phone: {
                required:true
            },
            status: {
                required:true
            },
            first_name: {
                required:true
            },
            last_name: {
                required:true
            }
        }
    });
    $('#roleForm').validate({
        rules: {
            name:{
                required:true
            }
        }
    });
    $('#pageForm').validate({
        rules: {
            title: {
                required: true
            },
            content: {
                required: true
            },
            meta_title: {
                required: true
            }
        }
    });
    $('#categoryForm').validate({
        rules: {
            name: {
              required: true,
            },
            meta_title: {
                required: true,
            }
        }
    });
    $('#tagForm').validate({
        rules: {
            name: {
              required: true,
            },
        }
    });
    $('#blogForm').validate({
        rules: {
            title: {
              required: true,
            },
            categories: {
                required: true,
            },
            content: {
                required: true,
            },
            tags: {
                required: true,
            },
            meta_title: {
                required: true,
            }
        }
    });

  })(jQuery);