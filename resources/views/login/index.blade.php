<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>
    <img class="wave" src="{{ asset('images/logo/wave.png') }}" alt="" >
    <div class="container">
        <div class="img">
            <img src="{{ asset('images/logo/headphone-animate (1).svg') }}" alt="">
        </div>
        <div class="login-content">
            <form action="index.html">
                <img src="{{ asset('images/logo/avatar.svg') }}" alt="">
                <h3 class="title">Create your account</h3>
                <div class="input-div one" name="myForm" onsubmit = "return(validate());">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div" >
                        <h5>Username</h5>
                        <input type="text" class="input" name="name">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <!-- <i class="fa-solid fa-cake-candles"></i> -->
                    </div>
                    <div class="div">
                        <h5>Ngày sinh</h5>
                        <input type="text" class="input" name="email">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="div">
                        <h5>Phone Number</h5>
                        <input type="text" class="input" name="phone">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" name="pass">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Confirm Password</h5>
                        <input type="password" class="input" name="confirm_pass">
                    </div>
                </div>
                <input type="submit" class="btn" value="Login"/>

            </form>
        </div>
    </div>
<script src="js/thanh.js"></script>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</body>
</html>
