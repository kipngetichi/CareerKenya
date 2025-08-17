 
<!-- Modal -->
<style>
  .modern-login-modal .modal-content {
    border-radius: 18px;
    box-shadow: 0 8px 40px rgba(44, 62, 80, 0.18);
    border: none;
    background: #f8fafc;
    animation: fadeInScale 0.5s cubic-bezier(.4,2,.6,1) 1;
  }
  @keyframes fadeInScale {
    from { opacity: 0; transform: scale(0.95); }
    to { opacity: 1; transform: scale(1); }
  }
  .modern-login-modal .modal-header {
    border-bottom: none;
    background: linear-gradient(90deg, #2962ff 0%, #00c853 100%);
    color: #fff;
    border-radius: 18px 18px 0 0;
    padding: 32px 32px 18px 32px;
    text-align: center;
  }
  .modern-login-modal .close {
    color: #fff;
    opacity: 0.8;
    font-size: 2rem;
    position: absolute;
    right: 24px;
    top: 24px;
    z-index: 2;
    transition: opacity 0.2s;
  }
  .modern-login-modal .close:hover {
    opacity: 1;
  }
  .modern-login-modal .modal-title {
    font-family: 'Montserrat', 'Segoe UI', Arial, sans-serif;
    font-size: 2rem;
    font-weight: 700;
    letter-spacing: 1px;
    color: #fff;
    margin: 0;
  }
  .modern-login-modal .modal-body {
    padding: 38px 38px 18px 38px;
    background: #f8fafc;
    border-radius: 0 0 18px 18px;
  }
  .modern-login-modal .login-box {
    max-width: 400px;
    margin: 0 auto;
  }
  .modern-login-modal .login-box-body {
    background: #fff;
    border-radius: 14px;
    box-shadow: 0 2px 16px rgba(44, 62, 80, 0.07);
    padding: 38px 32px 24px 32px;
    min-height: 350px;
    border: none;
    margin-bottom: 0;
  }
  .modern-login-modal .form-group {
    margin-bottom: 28px;
    position: relative;
  }
  .modern-login-modal .form-control {
    border-radius: 8px;
    border: 1px solid #e3e8ee;
    padding: 14px 44px 14px 16px;
    font-size: 1.08em;
    background: #f4f7fa;
    transition: border 0.2s;
    box-shadow: none;
  }
  .modern-login-modal .form-control:focus {
    border-color: #2962ff;
    background: #fff;
    outline: none;
  }
  .modern-login-modal .form-control-feedback {
    position: absolute;
    right: 18px;
    top: 50%;
    transform: translateY(-50%);
    color: #2962ff;
    font-size: 1.2em;
    pointer-events: none;
  }
  .modern-login-modal .checkbox label {
    font-size: 1em;
    color: #666;
    padding-left: 4px;
  }
  .modern-login-modal .checkbox input[type="checkbox"] {
    accent-color: #2962ff;
    margin-right: 6px;
  }
  .modern-login-modal .modal-footer {
    border-top: none;
    background: transparent;
    padding: 18px 38px 32px 38px;
    display: flex;
    justify-content: flex-end;
    gap: 12px;
  }
  .modern-login-modal .btn {
    border-radius: 30px;
    padding: 10px 32px;
    font-weight: 600;
    font-size: 1.1em;
    background: linear-gradient(90deg, #2962ff 0%, #00c853 100%);
    color: #fff;
    border: none;
    transition: background 0.2s, box-shadow 0.2s;
    box-shadow: 0 2px 8px rgba(52, 171, 235, 0.08);
  }
  .modern-login-modal .btn-default {
    background: #e3e8ee;
    color: #222;
    font-weight: 500;
    border: none;
    box-shadow: none;
  }
  .modern-login-modal .btn-primary:hover, .modern-login-modal .btn-default:hover {
    background: linear-gradient(90deg, #00c853 0%, #2962ff 100%);
    color: #fff;
    box-shadow: 0 4px 16px rgba(52, 171, 235, 0.16);
  }
  .modern-login-modal a {
    color: #2962ff;
    font-weight: 500;
    text-decoration: none;
    transition: color 0.2s;
    display: inline-block;
    margin-top: 10px;
  }
  .modern-login-modal a:hover {
    color: #00c853;
    text-decoration: underline;
  }
  @media (max-width: 576px) {
    .modern-login-modal .modal-header, .modern-login-modal .modal-body, .modern-login-modal .modal-footer {
      padding-left: 12px;
      padding-right: 12px;
    }
    .modern-login-modal .login-box-body {
      padding: 18px 8px 18px 8px;
    }
  }
</style>
<div class="modal fade modern-login-modal" id="myModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content login-card-2025">
      <div class="login-header-bg">
        <button class="close" data-dismiss="modal" type="button">×</button>
        <div class="login-avatar">
          <i class="fa fa-user"></i>
        </div>
        <div class="login-welcome">
          <h2>Welcome Back</h2>
          <p>Sign in to access your career dashboard</p>
        </div>
      </div>
      <div class="modal-body hold-transition login-page login-body-2025">
        <div id="loginerrormessage"></div>
        <div class="login-box"> 
          <div class="login-box-body login-box-body-2025"> 
            <form action="" method="post">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Email Address" name="user_email" id="user_email">
                <span class="fa fa-envelope form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="user_pass" id="user_pass">
                <span class="fa fa-lock form-control-feedback"></span>
              </div>
              <div class="row align-items-center" style="margin-bottom: 10px;">
                <div class="col-xs-6">
                  <div class="checkbox icheck">
                    <label>
                      <input type="checkbox"> Remember me
                    </label>
                  </div>
                </div>
                <div class="col-xs-6 text-right">
                  <a href="#" class="forgot-link">Forgot your password?</a>
                </div>
              </div>
              <button class="btn btn-primary btn-block login-btn-2025" name="btnlogin" id="btnlogin" type="submit">Login to Your Account <span style="margin-left:8px;" class="fa fa-arrow-right"></span></button>
            </form> 
            <div class="divider-2025"><span>Or continue with</span></div>
            <div class="social-login-2025">
              <a href="#" class="social-btn-2025 fb"><i class="fa fa-facebook"></i></a>
              <a href="#" class="social-btn-2025 google"><i class="fa fa-google"></i></a>
              <a href="#" class="social-btn-2025 linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
            <div class="text-center mt-3">
              <span>Don't have an account? <a href="<?php echo web_root; ?>index.php?q=register" class="register-link">Create Account</a></span>
            </div>
            <div class="secure-info-2025">
              <i class="fa fa-shield"></i> Your information is securely encrypted
            </div>
          </div>
        </div>
      </div>
      <div class="login-footer-2025">
        <button class="btn btn-block btn-guest-2025">Browse as Guest</button>
      </div>
    </div>
  </div>
</div>
<style>
  .login-card-2025 {
    border-radius: 24px;
    box-shadow: 0 8px 40px rgba(44, 62, 80, 0.18);
    border: none;
    background: #f8fafc;
    overflow: hidden;
    padding: 0;
    position: relative;
    animation: fadeInScale 0.5s cubic-bezier(.4,2,.6,1) 1;
  }
  .login-header-bg {
    background: linear-gradient(135deg, #2962ff 0%, #3a8dde 60%, #6a11cb 100%);
    color: #fff;
    border-radius: 24px 24px 0 0;
    padding: 38px 32px 60px 32px;
    text-align: center;
    position: relative;
  }
  .login-header-bg .close {
    color: #fff;
    opacity: 0.8;
    font-size: 2rem;
    position: absolute;
    right: 24px;
    top: 24px;
    z-index: 2;
    transition: opacity 0.2s;
  }
  .login-header-bg .close:hover {
    opacity: 1;
  }
  .login-avatar {
    width: 90px;
    height: 90px;
    background: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: -45px auto 0 auto;
    box-shadow: 0 2px 16px rgba(44, 62, 80, 0.10);
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: 70px;
    z-index: 3;
  }
  .login-avatar i {
    color: #2962ff;
    font-size: 2.8rem;
  }
  .login-welcome {
    margin-top: 60px;
  }
  .login-welcome h2 {
    font-family: 'Montserrat', 'Segoe UI', Arial, sans-serif;
    font-size: 2.1rem;
    font-weight: 700;
    letter-spacing: 1px;
    color: #fff;
    margin-bottom: 8px;
    text-shadow: 0 2px 8px rgba(44,62,80,0.10);
  }
  .login-welcome p {
    font-size: 1.08rem;
    color: #e3e8ee;
    margin-bottom: 0;
    font-weight: 400;
  }
  .login-body-2025 {
    background: #f8fafc;
    border-radius: 0 0 24px 24px;
    padding: 38px 38px 18px 38px;
  }
  .login-box-body-2025 {
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 2px 16px rgba(44, 62, 80, 0.07);
    padding: 38px 32px 24px 32px;
    min-height: 350px;
    border: none;
    margin-bottom: 0;
  }
  .login-box-body-2025 .form-group {
    margin-bottom: 22px;
    position: relative;
  }
  .login-box-body-2025 .form-control {
    border-radius: 12px;
    border: 2px solid #e3e8ee;
    padding: 16px 48px 16px 18px;
    font-size: 1.12em;
    background: #f4f7fa;
    transition: border 0.2s;
    box-shadow: none;
  }
  .login-box-body-2025 .form-control:focus {
    border-color: #2962ff;
    background: #fff;
    outline: none;
  }
  .login-box-body-2025 .form-control-feedback {
    position: absolute;
    right: 18px;
    top: 50%;
    transform: translateY(-50%);
    color: #2962ff;
    font-size: 1.3em;
    pointer-events: none;
  }
  .login-box-body-2025 .checkbox label {
    font-size: 1em;
    color: #666;
    padding-left: 4px;
  }
  .login-box-body-2025 .checkbox input[type="checkbox"] {
    accent-color: #2962ff;
    margin-right: 6px;
  }
  .forgot-link {
    color: #2962ff;
    font-size: 0.98em;
    font-weight: 500;
    text-decoration: none;
    transition: color 0.2s;
  }
  .forgot-link:hover {
    color: #00c853;
    text-decoration: underline;
  }
  .login-btn-2025 {
    border-radius: 14px;
    padding: 14px 0;
    font-weight: 700;
    font-size: 1.13em;
    background: linear-gradient(90deg, #2962ff 0%, #00c853 100%);
    color: #fff;
    border: none;
    margin-top: 10px;
    margin-bottom: 18px;
    box-shadow: 0 2px 8px rgba(52, 171, 235, 0.08);
    transition: background 0.2s, box-shadow 0.2s;
  }
  .login-btn-2025:hover {
    background: linear-gradient(90deg, #00c853 0%, #2962ff 100%);
    color: #fff;
    box-shadow: 0 4px 16px rgba(52, 171, 235, 0.16);
  }
  .divider-2025 {
    text-align: center;
    margin: 24px 0 18px 0;
    position: relative;
    color: #b0b8c1;
    font-size: 1em;
  }
  .divider-2025 span {
    background: #fff;
    padding: 0 16px;
    position: relative;
    z-index: 2;
  }
  .divider-2025:before {
    content: '';
    display: block;
    position: absolute;
    left: 0; right: 0; top: 50%;
    height: 1px;
    background: #e3e8ee;
    z-index: 1;
  }
  .social-login-2025 {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 22px;
    margin-bottom: 18px;
    margin-top: 8px;
  }
  .social-btn-2025 {
    width: 54px;
    height: 54px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.1em;
    color: #fff !important;
    background: #e3e8ee;
    box-shadow: 0 2px 12px rgba(44,62,80,0.10);
    text-decoration: none;
    border: none;
    transition: transform 0.18s, box-shadow 0.18s, background 0.18s;
    position: relative;
    outline: none;
  }
  .social-btn-2025 i {
    color: #fff !important;
    font-size: 1em;
    margin: 0;
    line-height: 1;
    display: block;
    width: 100%;
    text-align: center;
  }
  .social-btn-2025.fb { background: #3b5998; }
  .social-btn-2025.google { background: #db4437; }
  .social-btn-2025.linkedin { background: #0077b5; }
  .social-btn-2025:hover, .social-btn-2025:focus {
    transform: translateY(-3px) scale(1.08);
    box-shadow: 0 6px 24px rgba(44,62,80,0.18);
    filter: brightness(1.08);
    background: #222;
  }
  .register-link {
    color: #2962ff;
    font-weight: 600;
    text-decoration: none;
    transition: color 0.2s;
  }
  .register-link:hover {
    color: #00c853;
    text-decoration: underline;
  }
  .secure-info-2025 {
    margin-top: 18px;
    color: #4caf50;
    font-size: 0.98em;
    text-align: center;
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
  }
  .secure-info-2025 .fa-shield {
    font-size: 1.1em;
  }
  .login-footer-2025 {
    background: #f4f7fa;
    border-radius: 0 0 24px 24px;
    padding: 28px 0 24px 0;
    text-align: center;
    box-shadow: 0 -2px 8px rgba(44,62,80,0.04);
  }
  .btn-guest-2025 {
    border-radius: 12px;
    background: #fff;
    color: #444;
    font-weight: 600;
    border: 2px solid #e3e8ee;
    padding: 12px 0;
    font-size: 1.08em;
    box-shadow: 0 2px 8px rgba(44,62,80,0.06);
    transition: background 0.2s, color 0.2s, box-shadow 0.2s;
  }
  .btn-guest-2025:hover {
    background: #e3e8ee;
    color: #2962ff;
    box-shadow: 0 4px 16px rgba(44,62,80,0.13);
  }
  @media (max-width: 576px) {
    .login-header-bg, .login-body-2025 {
      padding-left: 8px;
      padding-right: 8px;
    }
    .login-box-body-2025 {
      padding: 18px 4px 18px 4px;
    }
    .login-footer-2025 {
      padding: 18px 0 14px 0;
    }
    .login-avatar {
      width: 70px; height: 70px; top: 50px;
    }
    .login-welcome { margin-top: 45px; }
  }
</style>