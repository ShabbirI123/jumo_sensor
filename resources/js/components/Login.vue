<template>
    <div class="container box">
        <h3 align="center">Simple Login System in Laravel</h3><br />
        <form method="post" action="">
            <div class="form-group">
                <label>Enter Username</label>
                <input type="text" name="username" class="form-control" />
            </div>
            <div class="form-group">
                <label>Enter Password</label>
                <input type="password" name="password" class="form-control" />
            </div>
            <div class="form-group">
                <input type="submit" name="login" class="btn btn-primary" value="Login" />
            </div>
        </form>
    </div>
</template>

<script>
export default {
        mounted() {
            console.log('Component mounted.')
        }
}
</script>


