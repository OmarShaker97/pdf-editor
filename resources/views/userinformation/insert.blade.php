
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
            <label>Account Holder Name</label>
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
              Address
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
              Country
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
              City
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
              Phone No.
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
              Fax
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
              E-mail
            </label>
          </div>
          </td>
        </tr>

        <tr>
      <td><input type = 'submit' value = "Submit" class="btn"/></td>
    </tr>
        
    </table>
    </form>