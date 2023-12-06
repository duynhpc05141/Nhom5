
<style>
        label.error {
        color: red; /* Định dạng màu chữ của thông báo lỗi thành màu đỏ */
        }
        #forgot-form {
            width: 400px;
            height: 300px;
            border-radius: 15px;
        }
    </style>

    <div class="container d-flex justify-content-center align-items-center bg-light shadow p-4 mt-5 mb-4">
        <form id="forgot-form" class="row g-3" action="index.php?act=send" method="post">
            <h2 class="text-center">Quên mật khẩu ?</h2>

            <div class="col-md-12">
                <label for="email"  class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Nhập Email" required>
                <span id="email-error" class="text-danger"></span>
            </div>
            <div class="col-md-12">
                <input  type="submit" value="Gửi" name="forgot" class="genric-btn danger-border col-12">
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#forgot-form').validate({
                rules: {
                    email: "required",
                },
                messages: {
                    email: "Email không được để trống! ",
                },
                // Xử lý khi biểu mẫu được gửi đi
                submitHandler: function (form) {
                    form.submit();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#forgot-form').on('submit', function(e) {
                let emailValue = $('#email').val().trim();

                if (isValidEmail(emailValue)) {
                    clearError();
                } else {
                    
                    e.preventDefault();
                    displayError('Email không hợp lệ');
                }
            });

            function isValidEmail(email) {
                let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                return emailRegex.test(email);
            }

            function displayError(message) {
                $('#email-error').text(message);
            }

            function clearError() {
                $('#email-error').text('');
            }
        });

    </script>
   

