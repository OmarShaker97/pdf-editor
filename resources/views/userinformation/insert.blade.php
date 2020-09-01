<form method="POST" action="{{ route('userinfo.store')}}">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table>
        <tr>
          <td><input type='text' name='name' /></td>
        <td>إسم صاحب
          الحساب</td>
        </tr>
        <tr>
        <td><input type='text' name='address' /></td>
        <td>العنوان</td>
        </tr>
        <tr>   
        <td><input type='text' name='country' /></td>
        <td>دولة</td>
        </tr>
        <tr>
        <td><input type='text' name='city' /></td>
        <td>مدينة</td>
        </tr>
        <tr>
        <td><input type='text' name='telephone' /></td>
        <td>تليفون</td>
        </tr>
        <tr>
        <td><input type='text' name='fax' /></td>
        <td>فاكس</td>
        </tr>
        <tr>
        <td><input type='text' name='email' /></td>
        <td>بريد إلكتروني</td>
        </tr>
        <tr>
      <td><input type = 'submit' value = "تسجيل"/></td>
    </tr>
        
    </table>
    </form>