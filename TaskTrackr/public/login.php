<?php include '../includes/header.php'; ?>

<p class="text-center fw-bold" style="color: #ffffff; font-size: 2.5rem;">TaskTrackr</p>

<div class="container-fluid min-vh-90 d-flex justify-content-center align-items-center" style="background: #1a1531;">
    <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
        <div class="text-center mb-4">
            <h2 class="mt-2 mb-0 fw-bold">Log In</h2>
            <p class="text-muted small mb-0">Welcome back! Please login to your account.</p>
        </div>

        <?php include '../includes/alerts.php'; ?>

        <form action="../actions/login_action.php" method="POST" autocomplete="off">
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email</label>
                <div class="input-group">
                    <span class="input-group-text bg-light"><i class="bi bi-envelope"></i></span>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required autofocus>
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Password</label>
                <div class="input-group">
                    <span class="input-group-text bg-light"><i class="bi bi-lock"></i></span>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-2 d-flex align-items-center justify-content-center">
                <i class="bi bi-box-arrow-in-right me-2"></i> Login
            </button>
        </form>

        <p class="text-center mt-3 mb-0 small text-muted">
            Don't have an account? <a href="../public/register.php" class="fw-semibold">Register</a>
        </p>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
