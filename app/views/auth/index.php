<form id="formAuthentication" class="mb-3" action="<?= BASE_URL ?>login/handleLogin" method="POST">
    <div class="mb-3">
        <label for="email" class="form-label">Username</label>
        <input type="text" class="form-control" id="email" name="username" placeholder="Enter your username"
            autofocus />
    </div>
    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label>
        </div>
        <div class="input-group input-group-merge">
            <input type="password" id="password" class="form-control" name="password"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
        </div>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
    </div>
</form>