@extends('layouts.app')

@section('content')
<div class="login-wrapper">
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h2>Welcome Back</h2>
                <p>Sign in to your account</p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                           name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-options">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>
                    @if (Route::has('password.request'))
                    <a class="forgot-password" href="{{ route('password.request') }}">Forgot Password?</a>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary btn-block btn-login">
                    Login
                </button>

                <div class="divider">
                    <span>or continue with</span>
                </div>

                <div class="social-login">
                    <a href="#" class="btn btn-outline-secondary btn-social">
                        <i class="fab fa-google"></i> Google
                    </a>
                    <a href="#" class="btn btn-outline-secondary btn-social">
                        <i class="fab fa-facebook-f"></i> Facebook
                    </a>
                </div>

                <div class="register-link">
                    Don't have an account? <a href="{{ route('register') }}">Sign up</a>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .login-wrapper {
        display: flex;
        min-height: 100vh;
        background-color: #f8f9fa;
    }
    
    .login-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .login-card {
        background: white;
        border-radius: 0.5rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 800px;
        padding: 3rem;
    }
    
    .login-header {
        text-align: center;
        margin-bottom: 2rem;
    }
    
    .login-header h2 {
        font-size: 2rem;
        font-weight: 600;
        color: #212529;
        margin-bottom: 0.5rem;
    }
    
    .login-header p {
        color: #6c757d;
        font-size: 1.1rem;
    }
    
    .form-group {
        margin-bottom: 1.5rem;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 500;
        color: #495057;
    }
    
    .form-control {
        display: block;
        width: 100%;
        padding: 0.75rem 1rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.375rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    
    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    
    .form-options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }
    
    .form-check {
        display: flex;
        align-items: center;
    }
    
    .form-check-input {
        width: 1.2rem;
        height: 1.2rem;
        margin-top: 0;
        margin-right: 0.5rem;
    }
    
    .forgot-password {
        color: #6c757d;
        text-decoration: none;
        font-size: 0.9rem;
    }
    
    .forgot-password:hover {
        color: #0056b3;
        text-decoration: underline;
    }
    
    .btn-login {
        padding: 0.75rem;
        font-size: 1.1rem;
        font-weight: 500;
        margin-bottom: 1.5rem;
    }
    
    .divider {
        display: flex;
        align-items: center;
        margin: 1.5rem 0;
        color: #6c757d;
    }
    
    .divider::before,
    .divider::after {
        content: "";
        flex: 1;
        border-bottom: 1px solid #dee2e6;
    }
    
    .divider::before {
        margin-right: 1rem;
    }
    
    .divider::after {
        margin-left: 1rem;
    }
    
    .social-login {
        display: flex;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }
    
    .btn-social {
        flex: 1;
        padding: 0.75rem;
        font-size: 1rem;
    }
    
    .register-link {
        text-align: center;
        color: #6c757d;
    }
    
    .register-link a {
        color: #007bff;
        text-decoration: none;
        font-weight: 500;
    }
    
    .register-link a:hover {
        text-decoration: underline;
    }
    
    .invalid-feedback {
        display: block;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 0.875rem;
        color: #dc3545;
    }

    @media (max-width: 768px) {
        .login-card {
            padding: 2rem;
        }
        
        .social-login {
            flex-direction: column;
        }
        
        .btn-social {
            width: 100%;
        }
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
@endsection