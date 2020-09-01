<form method="POST" action="{{ route('userinfo.generatepdf')}}">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table>
        <tr>
        <td>Insert User ID</td>
        <td><input type='text' name='id' /></td>
        </tr>
    </table>
</form>