<?php
include "head.php"
?>
<body>
    <div><h1>REGISTRO</h1></div>
    <div class="row">
        <form class="col s12" action="form.php" method="post">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">person</i>
              <input id="icon_prefix" type="text" name="txtnombre"  class="validate">
              <label for="icon_prefix">First Name</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">phone</i>
              <input id="icon_telephone" type="text" name="txtphone" class="validate">
              <label for="icon_telephone"  >Telephone</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">password</i>
              <input id="icon_telephone" type="text" name="txtpassword" class="validate">
              <label for="icon_telephone"  >Password</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">email</i>
              <input id="icon_telephone" type="text" name="txtemail" class="validate">
              <label for="icon_telephone"  >Email</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">group</i>
              <input id="icon_telephone" type="text" name="txtedad" class="validate">
              <label for="icon_telephone"  >Age</label>
            </div>

          </div>

          <button>Enviar</button>
        </form>
      </div>

</body>
<?php
include "footeer.php";
?>
