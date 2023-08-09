<form action="/resource" method="POST">
    <input type="text" name="username" id="">
    <input type="hidden" name="_token" value=" <?php echo csrf_token() ?>">
    <input type="submit" value="Submit">
</form>