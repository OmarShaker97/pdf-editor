<head>
    <link rel="stylesheet" href="{{ URL::asset('css/userinfo.css') }}">
</head>

<form method="POST" action="generatepdf">
  {{@csrf_field()}}  
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    
    <table>
        
        <tr>
            <td>
            <div class="group">      
              <input type="text" name='id' required>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>
                Insert User ID
              </label>
            </div>
            </td>
          </tr>
        <tr>
        <td><input type = 'submit' value = "Submit" class="btn"/></td>
        </tr> 
    </table>
</form>