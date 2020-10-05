

<form method="POST" action="{{ route('userinfo.store')}}">
  {{@csrf_field()}}
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
          <td>
            <div class="form-group">
              <p> Send:
              <input type="radio" name="send" value="1">
              <label for="1">Monthly</label>
              <input type="radio" name="send" value="2">
              <label for="2">Quarterly</label>
              <input type="radio" name="send" value="3">
              <label for="3">Semi-Annually</label>
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <p>Receive Trade Confirmation by <br>
            <input type="checkbox" id="chkphone" name="chkphone" value="Yes">
            <label for="chkphone">Phone</label><br>
            <input type="checkbox" id="chkemail" name="chkemail" value="Yes">
            <label for="chkemail"> Email</label><br>
            <input type="checkbox" id="chkmobile_app" name="chkmobile_app" value="Yes">
            <label for="chkmobile_app"> Mobile Applications</label><br>
            <input type="checkbox" id="chkfax" name="chkfax" value="Yes">
            <label for="chkfax">Fax</label><br>
            <input type="checkbox" id="chksms" name="chksms" value="Yes">
            <label for="chksms">SMS</label><br>
          </td>
        </tr>

        <tr>
      <td><input type = 'submit' value = "Submit" class="btn"/></td>
    </tr>
        
    </table>
    </form>