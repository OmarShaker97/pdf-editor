<form method="POST" action="generatepdf">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table>
        <tr>
        <td>Insert User ID</td>
        <td><input type='text' name='id' /></td>
        <td><input type = 'submit' value = "Submit"/></td>
        </tr> 
    </table>
</form>