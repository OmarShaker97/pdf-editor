<form method="POST" action="{{ route('userinfo.store')}}">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table>
        <tr>
        <td>Name</td>
        <td><input type='text' name='name' /></td>
        </tr>
        <tr>
        <td>Address</td>
        <td><input type='text' name='address' /></td>
        </tr>
        <tr>
        <td>Country</td>
        <td><input type='text' name='country' /></td>
        </tr>
        <tr>
        <td>City</td>
        <td><input type='text' name='city' /></td>
        </tr>
        <tr>
        <td>Telephone</td>
        <td><input type='text' name='telephone' /></td>
        </tr>
        <tr>
        <td>Fax</td>
        <td><input type='text' name='fax' /></td>
        </tr>
        <tr>
        <td>Email</td>
        <td><input type='text' name='email' /></td>
        </tr>
        <tr>
      <td><input type = 'submit' value = "Submit"/></td>
    </tr>
        
    </table>
    </form>