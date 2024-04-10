<form action="/test_http_request" method="post">
    <div>
        <input type="text" name="name" placeholder="Nhap username">
        <input type="hidden" name="_method" value="put">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
    </div>
    <button type="submit">Submit</button>
</form>
