
<head>
  <link rel="stylesheet" href="{{ URL::asset('css/userinfo.css') }}">
</head>


<form method="POST" action="{{ route('userinfo.store')}}">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table class="table">

        <tr>
          <td>
          <div class="group">      
            <input type="text" name='name' required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>
              إسم صاحب
                الحساب
            </label>
          </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="group">      
            <input type="text" name='address' required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>
              العنوان
            </label>
          </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="group">      
            <input type="text" name='country' required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>
              دولة
            </label>
          </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="group">      
            <input type="text" name='city' required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>
              مدينة
            </label>
          </div>
          </td>
        </tr>

        
        <tr>
          <td>
          <div class="group">      
            <input type="text" name='telephone' required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>
              تليفون
            </label>
          </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="group">      
            <input type="text" name='fax' required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>
              فاكس
            </label>
          </div>
          </td>
        </tr>

        <tr>
          <td>
          <div class="group">      
            <input type="text" name='email' required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>
              بريد إلكتروني
            </label>
          </div>
          </td>
        </tr>

        <tr>
      <td><input type = 'submit' value = "تسجيل" class="btn"/></td>
    </tr>
        
    </table>
    </form>