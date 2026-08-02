<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/config/database.php';

$pageTitle = 'تسجيل الدخول';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($email === '' || $password === '') {
        $error = 'يرجى إدخال البريد الإلكتروني وكلمة المرور.';
    } else {
        // FIX BUG S4-T01: Secure authentication with Prepared Statements & password_verify
        try {
            $stmt = $pdo->prepare('SELECT id, name, email, password, role FROM users WHERE email = :email LIMIT 1');
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                session_regenerate_id(true); // Prevent session fixation attacks
                $_SESSION['infotec_user'] = [
                    'id'    => $user['id'],
                    'name'  => $user['name'],
                    'email' => $user['email'],
                    'role'  => $user['role'],
                ];
                header('Location: /infotec/dashboard.php');
                exit;
            } else {
                $error = 'البريد الإلكتروني أو كلمة المرور غير صحيحة.';
            }
        } catch (PDOException $e) {
            $error = 'حدث خطأ في النظام، يرجى المحاولة لاحقاً.';
        }
    }
}

require __DIR__ . '/includes/header.php';
?>

<div class="auth-container">
    <h1 class="auth-title">تسجيل الدخول</h1>
    
    <?php if ($error): ?>
        <div class="alert alert-error" role="alert"><?= e($error) ?></div>
    <?php endif; ?>

    <form method="post" id="login-form" novalidate>
        <div class="form-group">
            <label for="email">البريد الإلكتروني</label>
            <!-- FIX BUG S2-T05: Added name="email" and autocomplete -->
            <input type="email" name="email" class="form-control" id="email" 
                   placeholder="student@university.edu" required autocomplete="email"
                   value="<?= e($_POST['email'] ?? '') ?>">
        </div>

        <div class="form-group">
            <label for="password">كلمة المرور</label>
            <div class="password-input-wrapper">
                <input type="password" name="password" class="form-control" id="password" required autocomplete="current-password">
                <button type="button" class="btn-toggle-password" onclick="togglePassword()" aria-label="إظهار/إخفاء كلمة المرور">
                    إظهار/إخفاء
                </button>
            </div>
        </div>

        <!-- FIX BUG S1-T07: Interactive primary button -->
        <button type="submit" class="btn btn-primary btn-login btn-block">دخول</button>
    </form>

    <p class="auth-footer"><a href="/infotec/register.php">إنشاء حساب جديد</a></p>
</div>

<script src="<?= asset('js/auth.js') ?>"></script>
<?php require __DIR__ . '/includes/footer.php'; ?>